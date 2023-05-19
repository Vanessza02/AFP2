
describe('Registration', () => {
  beforeEach(() => {
    cy.visit('http://localhost:8000/register');
  });

  it('should display registration page', () => {
    cy.contains('Regisztráció');
    cy.url().should('include', 'http://localhost:8000/register');
  });

  it('should register successfully with valid credentials', () => {
    cy.get('input[name="nickname"]').type('Johny');
    cy.get('input[name="lastname"]').type('Doe');
    cy.get('input[name="firstname"]').type('John');
    cy.get('input[name="email"]').type('johndoe@example.com');
    cy.get('input[name="password"]').type('password');
    cy.get('button[type="submit"]').click();
    
    cy.visit('http://localhost:8000/login');
  });

  it('should display error messages with invalid credentials', () => {
    cy.get('input[name="nickname"]').type('Johny');
    cy.get('input[name="lastname"]').type('Doe');
    cy.get('input[name="firstname"]').type('John');
    cy.get('input[name="email"]').type('invalid-email');
    cy.get('input[name="password"]').type('password');
    cy.get('button[type="submit"]').click();

    //cy.contains('The email must be a valid email address.');
  });
});
