Cypress.on('uncaught:exception', (err, runnable) => {
  return false
})


describe('Team Page', () => {
  before(() => {
    cy.visit('http://localhost:8000/login') 

    cy.get('input[name="email"]').type('johndoe@example.com');
    cy.get('input[name="password"]').type('password'); 

    cy.get('button[type="submit"]').click()
  })

  it('Displays the team creation form', () => {
    cy.visit('http://localhost:8000/groups') 

    cy.contains('Csapat Létrehozása') 

    cy.get('input[name="name"]').should('exist') 
    cy.get('input[name="description"]').should('exist') 
    cy.get('input[name="name"]').type('teszt'); 
    cy.get('input[name="description"]').type('tesztelek');
    cy.get('button[type="submit"]').click();
  })
})

  

