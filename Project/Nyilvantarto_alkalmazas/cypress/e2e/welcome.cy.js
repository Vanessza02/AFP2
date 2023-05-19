Cypress.on('uncaught:exception', (err, runnable) => {
  // returning false here prevents Cypress from
  // failing the test
  return false
})
describe("welcome page", () => {
  it("the h1 contains the correct text", () => {
    cy.visit("http://localhost:8000")
    cy.get("h1").contains("Üdvözöllek")
  })
})
it.only("the features on the welcome page are correct", () => {
  cy.visit("http://localhost:8000")
  cy.get("div")
  cy.get("ul").eq(0).contains("Scrum Meeting Kezdőoldal")
  cy.get("p").contains("Csatlakozz a scrum meetinghez.")
  cy.get("a").eq(2).contains("Bejelentkezés")
  cy.get("a").eq(3).contains("Regisztráció")
})
