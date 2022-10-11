import "./App.css";
import React from "react";
import LoginPage from "./page/loginPage";
import { BrowserRouter, Routes, Route, Navigate } from "react-router-dom";

function App() {
  return (
    <>
      <LoginPage />
    </>
  );

  // const ProtectedRoute = () => {
  //   let {tokens } = useAuth();
  //   if (!tokens || !tokens.access_token || tokens.access_token === '') {
  //       console.log(`Navigate to="/login"`, { tokens });
  //       return <Navigate to="/login" />;
  //   }
  //   return <Outlet />;
  // };

  // function App() {
  //   return (
  //     <>
  //       <BrowserRouter>
  //         <Routes>
  //           <Route exact path="/" element={<ProtectedRoute />}>
  //             {/* default page */}
  //             <Route
  //               exact
  //               path="/Provider"
  //               element={
  //                 <Dashboard>
  //                   <Providers />
  //                 </Dashboard>
  //               }
  //             />
  //             <Route
  //               exact
  //               path="/NewProvider"
  //               element={
  //                 <Dashboard>
  //                   <NewProvider />
  //                 </Dashboard>
  //               }
  //             />
  //           </Route>

  //           <LoginPage />
  //         </Routes>
  //       </BrowserRouter>
  //     </>
  //   );

  // <div className="App">
  //     <header className="App-header">
  //       <img src={logo} className="App-logo" alt="logo" />
  //       <p>
  //         Edit <code>src/App.js</code> and save to reload.
  //       </p>
  //       <a
  //         className="App-link"
  //         href="https://reactjs.org"
  //         target="_blank"
  //         rel="noopener noreferrer"
  //       >
  //         Learn React
  //       </a>
  //     </header>
  //   </div>
}


export default App;
