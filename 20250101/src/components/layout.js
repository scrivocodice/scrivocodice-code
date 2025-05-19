import React from "react"

const Layout = ({ children }) => (
  <div>
    <header>
      <h1>Il mio Blog Gatsby</h1>
    </header>
    <main>{children}</main>
    <footer>
      <p>© {new Date().getFullYear()}, Tutti i diritti riservati</p>
    </footer>
  </div>
)

export default Layout
