import React from "react";
import "./loginForm.css";
import { Login } from "../../services/auth";

const LoginForm = () => {
  const handleSubmit = async (event) => {
    event.preventDefault();
    var { email, pass } = document.forms[0];
    console.log("event :>> ", email.value, pass.value);

    // var { email, pass } = document.forms[0];

    const result = await Login({ email, pass });
    console.log("result ana hon :>> ", result);
  };

  return (
    // html or jsx
    <>
      {/* <!-- Sign in block --> */}
      <div className="signin-block">
        <form>
          <h1 className="signin-header">Let's Date!</h1>
          <h2 className="signin-subheader">Sign in</h2>
          {/* <!-- Sign in username --> */}
          <div className="signin-content" id="username">
            <input
              type="username"
              placeholder="Username"
              className="signin-username input"
              id="usernameInput"
              name="email"
            />
          </div>
          {/* <!-- Sign in password --> */}
          <div className="signin-content" id="password">
            <input
              type="password"
              placeholder="Password"
              className="signin-password input"
              id="passwordInput"
              name="pass"
            />
          </div>
          {/* <!-- Sign in button --> */}
          <button
            className="signin-page-button button"
            id="signinPageButton"
            onClick={handleSubmit}
          >
            Sign in
          </button>
          <p>
            First date? <span className="signup-link">Signup</span>
          </p>
          <p className="display error" id="error"></p>
        </form>
      </div>
    </>
  );
};

export default LoginForm;
