// menentukan email dan password yang dibuat
const user = {
  email: "admin@gmail.com",
  password: "2222",
};
// mengambil data dengan id myForm di login.php lalu listener untuk
// mengarahkan submit ke halaman yang ditentukan setelah login
document.getElementById("myForm").addEventListener("submit", (e) => {
  e.preventDefault();
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  if (user.email == email && user.password == password) {
    alert("berhasil Login");
    window.location.href = "dasbor.php";
  } else {
    alert("katasandi salah");
  }
});
