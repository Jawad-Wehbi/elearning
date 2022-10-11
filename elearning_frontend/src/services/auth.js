import axios from "axios";

const Base_url = "http://127.0.0.1:8000/api/";

const Login = async (data) => {
  return new Promise((resolve, reject) => {
    try {
      axios
        .post(`${Base_url}/login`, { email: data.email, password: data.pass })
        .then((result) => {
          console.log("result :>> ", result);
          const access_token = result.accessToken;
          localStorage.setItem("access_token", access_token);
          localStorage.setItem("email", data.email);
          resolve(result);
        })
        .catch((err) => {
          console.log(err.response);
          if (err.response?.data) reject(err.response?.data);
          else reject("something wrong happened" + err);
        });
    } catch (err) {
      if (err.response?.data) reject(err.response?.data);
      else reject("something wrong happened" + err);
    }
  });
};

const Logout = () => {
  localStorage.removeItem("access_token");
  localStorage.removeItem("email");
};
// don't forget to add the register and logout methods

export { Login, Logout };
