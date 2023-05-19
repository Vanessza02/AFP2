Cypress.on('uncaught:exception', (err, runnable) => {
  // returning false here prevents Cypress from
  // failing the test
  return false
})
describe('Login', () => {
  beforeEach(() => {
    cy.visit('http://localhost:8000/login');
  });

  it('should display login page', () => {
    cy.contains('Kérlek lépj be');
    cy.url().should('include', 'http://localhost:8000/login');
  });

  it('should login successfully with valid credentials', () => {
    cy.get('input[name="email"]').type('johndoe@example.com');
    cy.get('input[name="password"]').type('password');
    cy.get('input[type="checkbox"]').check().should('be.checked');
    cy.get('button[type="submit"]').click();
    cy.visit('http://localhost:8000/dashboard');
  });

  it('should display error message with invalid credentials', () => {
    cy.get('input[name="email"]').type('invalid@example.com');
    cy.get('input[name="password"]').type('wrongpassword');
    cy.get('button[type="submit"]').click();

    cy.contains('These credentials do not match our records.');
  });
});