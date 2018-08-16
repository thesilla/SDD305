<!DOCTYPE html>
<html>
  <head>
    <title>Index.php</title>

    <style>
      * {
        box-sizing: border-box;
      }

      .base-form {
        font-family: sans-serif;
        font-size: 16px;
        max-width: 400px;
        margin: 100px auto;
        box-shadow: 0 0 4px #6f2d91;
        border-radius: 2px;
        color: #6f2d91;
        padding-bottom: 16px;
      }
      .base-form .form-title {
        padding: 16px;
        text-align: center;
        background-color: #6f2d91;
        color: white;
        border-top-left-radius: inherit;
        border-top-right-radius: inherit;
      }
      .base-form .form-row {
        display: flex;
        align-items: center;
        padding: 16px 16px 0 16px;
      }
      .base-form .form-label {
        flex: 1;
      }
      .base-form .form-control {
        flex: 1;
      }
      .base-form .form-error {
        color: #ff6262;
        font-size: 14px;
        font-style: italic;
      }
      .base-form .form-input {
        max-width: 100%;
        font-family: inherit;
        font-size: inherit;
        color: inherit;
        border: 1px solid #6f2d91;
        border-radius: 2px;
        padding: 4px 8px;
        outline: none;
      }
      .base-form .form-input:focus {
        box-shadow: 0 0 2px #6f2d91;
      }
      .base-form .form-link {
        color: #6f2d91;
        text-decoration: underline;
        cursor: pointer;
        font-weight: bold;
      }
      .base-form .form-button {
        background-color: #6f2d91;
        padding: 8px 16px;
        color: white;
        border: 0;
        border-radius: 2px;
        outline: none;
        cursor: pointer;
        font-size: inherit;
      }
      .base-form .form-button:focus {
        box-shadow: 0 0 2px #6f2d91;
      }
      .base-form .form-actions {
        text-align: center;
      }
    </style>

  </head>
  <body>

    <form class="base-form">
      <div class="form-title">TITLE</div>

      <div class="form-row">
        <div class="form-label">Enter EMAIL</div>
        <div class="form-control">
          <input class="form-input" type="text" placeholder="Email">
          <div class="form-error">email is required</div>
        </div>
      </div>

      <div class="form-row">
        <div class="form-label">Enter FULL NAME</div>
        <div class="form-control">
          <input class="form-input" type="text" placeholder="Full name">
        </div>
      </div>

      <div class="form-row">
        <div class="form-label">Appointment Date</div>
        <div class="form-control">
          <input class="form-input" type="text" placeholder="Appointment date">
        </div>
      </div>

      <div class="form-row">
        <div class="form-label">Appointment Time</div>
        <div class="form-control">
          <input class="form-input" type="text" placeholder="Appointment time">
        </div>
      </div>

      <div class="form-row form-actions">
        <div class="form-label">
          <a class="form-link">Admin login</a>
        </div>
        <div class="form-control">
          <button class="form-button">CONSENT</button>
        </div>
      </div>
    </from>

  </body>
</html>