describe('Página Inicial', () => {
  
  beforeEach(()=>{
    cy.visit('http://localhost/ecoquiz/')
  });
  it('Verificar  cadastro de novo nome e e-mail(único) no banco', () => {
    let caracteres = "ABCDEFGHIJKLMNOPQRSTUVXZWYabcdefghijklmnopqrstuvwyz0123456789";
    let txt = ''
    for(var i=0;i<=8;i++){
      txt += caracteres.charAt(Math.floor(Math.random()*caracteres.length)) 
    }
    var nome = txt
    var email = txt+'@gmail.com';
    cy.cadastro(nome,email);
    cy.contains('Bem-vindo(a) '+nome).should('be.visible')
  })
  it('Bloquear cadastro de email já cadastrado',()=>{
    cy.cadastro('Tatiana','tatiana@gmail.com');
    cy.contains('E-mail já cadastrado').should('be.visible');
  })
})