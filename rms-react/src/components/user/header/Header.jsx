import React from 'react'
import Nav from './Nav'
import Hero from './Hero'

const Header = () => {
  return (
    <header className='home-header'>
      <div className='home-header_container'>
        <Nav />
        <Hero />
      </div>
    </header>
    
  )
}

export default Header