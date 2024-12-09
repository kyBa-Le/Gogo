import { fetchData } from "./main.js";
import { sendData } from "./main.js";

async function renderUserCard() {
  const isSignedIn = await fetchData("/api/is-signed-in");
  if (isSignedIn) {
    const user = await fetchData("/api/user");
    console.log(user);
    const userInfo = user[0];

    document.getElementById("contents").innerHTML = `
    <div class="user-info-item">
        <i class="fas fa-user"></i>
        <p class="user-name">Username: <span id="username">${userInfo.username}</span></p>
    </div>
    <div class="user-info-item">
        <i class="fas fa-user-alt"></i>
        <p class="full-name">Full Name: <span id="fullname">${userInfo.fullname}</span></p>
    </div>
    <div class="user-info-item">
        <i class="fas fa-envelope"></i>
        <p class="email-user">Email: <span id="email">${userInfo.email}</span></p>
    </div>
    <div class="user-info-item">
        <i class="fas fa-phone"></i>
        <p class="phone-user">Phone: <span id="phone">${userInfo.phone}</span></p>
    </div>
    <div class="user-info-actions">
        <button id="edit-btn" class="action-button">Edit</button>
        <button id="history-btn" class="action-button">View Booking History</button>
    </div>
`;

    document.getElementById("edit-btn").addEventListener("click", function () {
      document.getElementById("contents").innerHTML = `
      <div class="user-info-item">
          <i class="fas fa-user"></i>
          <p class="user-name">Username: 
            <input id="edit-username" type="text" value="${userInfo.username}" />
            <span id="username-error" class="error-message"></span>
          </p>
      </div>
      <div class="user-info-item">
          <i class="fas fa-user-alt"></i>
          <p class="full-name">Full Name: 
            <input id="edit-fullname" type="text" value="${userInfo.fullname}" />
            <span id="fullname-error" class="error-message"></span>
          </p>
      </div>
      <div class="user-info-item">
          <i class="fas fa-envelope"></i>
          <p class="email-user">Email: 
            <input id="edit-email" type="email" value="${userInfo.email}" />
            <span id="email-error" class="error-message"></span>
          </p>
      </div>
      <div class="user-info-item">
          <i class="fas fa-phone"></i>
          <p class="phone-user">Phone: 
            <input id="edit-phone" type="tel" value="${userInfo.phone}" />
            <span id="phone-error" class="error-message"></span>
          </p>
      </div>
      <div class="user-info-actions">
          <button id="save-btn" class="action-button">Save</button>
          <button id="cancel-btn" class="action-button">Cancel</button>
      </div>
      `;

      document
        .getElementById("save-btn")
        .addEventListener("click", async function () {
          const newUsername = document
            .getElementById("edit-username")
            .value.trim();
          const newFullname = document
            .getElementById("edit-fullname")
            .value.trim();
          const newEmail = document.getElementById("edit-email").value.trim();
          const newPhone = document.getElementById("edit-phone").value.trim();

          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          const phoneRegex = /^\d{10}$/;

          let hasError = false;

          if (!newUsername) {
            document.getElementById("username-error").textContent =
              "Username cannot be empty!";
            hasError = true;
          } else {
            document.getElementById("username-error").textContent = "";
          }

          if (!newFullname) {
            document.getElementById("fullname-error").textContent =
              "Full Name cannot be empty!";
            hasError = true;
          } else {
            document.getElementById("fullname-error").textContent = "";
          }

          if (!emailRegex.test(newEmail)) {
            document.getElementById("email-error").textContent =
              "Invalid Email format!";
            hasError = true;
          } else {
            document.getElementById("email-error").textContent = "";
          }
          if (!phoneRegex.test(newPhone)) {
            document.getElementById("phone-error").textContent =
              "Phone number must be exactly 10 digits!";
            hasError = true;
          } else {
            document.getElementById("phone-error").textContent = "";
          }
          if (!hasError) {
            const updatedUser = {
              username: newUsername,
              fullName: newFullname,
              email: newEmail,
              phone: newPhone,
            };
              const response = await sendData("/api/users/update", updatedUser);
              console.log('Response nè hehehe:' + response);
              if (response.success) {
                alert("User information updated successfully!");
                renderUserCard();
                window.location.reload();
              } else {
                alert("Failed to update user information.");
              }
          }
        });
      document
        .getElementById("cancel-btn")
        .addEventListener("click", function () {
          renderUserCard();
        });
    });

    document
      .getElementById("history-btn")
      .addEventListener("click", function () {
        window.location.href = '/booking';
      });
  }
}
renderUserCard();

// Làm tí avt
const avatarInput = document.getElementById("avatarInput");
const avatarPreview = document
  .getElementById("avatarPreview")
  .querySelector("img");
const editButton = document.getElementById("editButton");
editButton.addEventListener("click", () => {
  avatarInput.click();
});
avatarInput.addEventListener("change", (event) => {
  const file = event.target.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = (e) => {
      avatarPreview.src = e.target.result;
    };
    reader.readAsDataURL(file);
  }
});