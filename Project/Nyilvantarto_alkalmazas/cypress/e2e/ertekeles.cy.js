Cypress.on('uncaught:exception', (err, runnable) => {
  return false
})
describe('Rating Page', () => {
  before(() => {
    cy.visit('http://localhost:8000/login'); 

    cy.get('input[name="email"]').type('johndoe@example.com');
    cy.get('input[name="password"]').type('password'); 

    cy.get('button[type="submit"]').click();
  });

  it('Allows rating selection and submission', () => {
    cy.visit('http://localhost:8000/ratings'); 

    cy.contains('Csapat Kiválasztása'); 

    cy.get('select[name="name"]').should('exist');
    cy.get('select[name="ratee_name"]').should('not.exist'); 

    cy.get('select[name="name"]').select('Csapat 1'); 

    cy.get('button[type="submit"]').click(); 

    cy.get('select[name="ratee_name"]').should('exist'); 

    cy.get('select[name="ratee_name"]').select('John Doe'); 

    cy.get('select[name="score"]').select('8'); 

    cy.get('input[name="reason"]').type('Teszt értékelés ok'); 

    cy.get('button[type="submit"]').click(); 

    cy.contains('Értékelés sikeresen rögzítve!'); 
  });
});
