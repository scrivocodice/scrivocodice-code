import React from 'react'
import { Link } from 'gatsby'
import { Box } from 'theme-ui'

const Header = () => {
  return (
    <Box sx={{ textAlign: 'center', padding: '20px' }}>
      <h1>Il Mio Blog</h1>
      <nav>
        <ul style={{ listStyle: 'none', padding: 0 }}>
          <li style={{ display: 'inline', margin: '0 10px' }}>
            <Link to="/">Home</Link>
          </li>
          <li style={{ display: 'inline', margin: '0 10px' }}>
            <Link to="/chi-siamo/">Chi Siamo</Link>
          </li>
          {/* Aggiungi altre voci di menu se necessario */}
        </ul>
      </nav>
    </Box>
  )
}

export default Header
