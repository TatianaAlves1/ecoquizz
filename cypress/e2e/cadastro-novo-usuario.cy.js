describe('Página Inicial', () => {
  let caracteres = "ABCDEFGHIJKLMNOPQRSTUVXZWYabcdefghijklmnopqrstuvwyz0123456789";
  let txt = ''
  for(var i=0;i<=8;i++){
    txt += caracteres.charAt(Math.floor(Math.random()*caracteres.length)) 
  }
  var nome = txt
  var email = txt+'@gmail.com';
  it('Verificar  cadastro de novo nome e e-mail no banco', () => {
    cy.visit('http://localhost/ecoquiz/')
    cy.get('[data-test="nome"]').type(nome)
    cy.get('[data-test="email"]').type(email)
    cy.get('[data-test="btn-cad"]').click()
  })
})