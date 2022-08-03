import React from 'react'
import { Route, Routes } from 'react-router-dom'
import Main from './components/user/Main'
import { version } from 'react'

console.log(version);

const App = () => {
  return (
    <>
    <Routes>
      <>
        <Route path='/' element={<Main />}/>
      </>
    </Routes>
    </>
  )
}

export default App