![Screenshot 2025-01-16 202257](https://github.com/user-attachments/assets/f029d599-477a-47bb-992e-60539732854c)# 💎 Sultan Top-Up

## 📖 Description
Sultan Top-Up is an online platform for purchasing game vouchers. The website provides a seamless experience for users to browse, search, and purchase game vouchers, along with features such as discounts, payment receipts, and transaction history. The admin page allows management of games, vouchers, payments, and user messages, ensuring smooth operation of the platform.

---

## ✨ Key Features

1. **Game Voucher Listing**
   - Display a list of online game vouchers available for purchase.

2. **Search Functionality**
   - Search for game vouchers by game title.

3. **Discount Integration**
   - Automatically apply discounts to eligible vouchers.

4. **Voucher Details**
   - View detailed information about vouchers, including package options and payment methods.

5. **Payment and Receipts**
   - Generate payment receipts upon successful purchase.
   - Search for receipts by game ID.

6. **Transaction History**
   - View purchase history (requires user login).

7. **Authentication**
   - Register and login functionality for users.
   - Login is required for purchasing vouchers and viewing transaction history.

8. **Messaging System**
   - Send and receive messages via the website.

9. **Admin Page**
   - Manage games, payment methods, vouchers, receipts, and messages.
   - Verify or reject transfer receipts for voucher purchases.

---

## 🛠️ Technologies Used

- **Framework:** CodeIgniter 3
- **Database:** SQL
- **Frontend:** HTML, CSS, JavaScript (with Bootstrap for responsiveness)

---

## 🚀 Installation

Follow these steps to set up the application locally:

1. Clone the repository:
   ```bash
   git clone https://github.com/arulzkash/sultan_topup.git
   ```

2. Navigate to the project directory:
   ```bash
   cd sultan_topup
   ```

3. Configure the database:
   - Import the provided SQL file (`db_voucher.sql`) into your SQL database.
   - Update the database connection details in `application/config/database.php`.

4. Set up the base URL in `application/config/config.php`:
   ```php
   $config['base_url'] = 'http://localhost/sultan_topup/';
   ```

5. Run the application:
   - Place the project in your server's root directory (e.g., `htdocs` for XAMPP).
   - Access the application in your browser at `http://localhost/sultan_topup`.

---

## 🛒 Usage

1. **User Features:**
   - Browse and search for game vouchers.
   - View voucher details, apply discounts, and complete payments.
   - Access purchase history and search receipts.

2. **Admin Features:**
   - Login to manage the platform.
   - Perform CRUD operations for:
     - Games
     - Payment Methods
     - Vouchers
     - Receipts (including verification/rejection of transfer proofs)
   - Manage user messages.

---

## 📂 Project Structure

```
sultan_topup/
├── application/
│   ├── config/         # Application configuration
│   ├── controllers/    # Main controllers for user and admin functionality
│   ├── models/         # Models for database interactions
│   ├── views/          # Views for frontend pages
│
├── assets/             # CSS, JS, and image files
├── system/             # CodeIgniter core files
├── database.sql        # Database schema for initial setup
├── index.php           # Application entry point
```

---

## 📷 Screenshots

1. **Voucher Listing**
  ![Screenshot 2025-01-16 202257](https://github.com/user-attachments/assets/46a051c3-803e-41f0-bc98-d438f9005ab1)
	![image](https://github.com/user-attachments/assets/ebf59068-a760-4dff-89d0-09e8f5c0ac0d)
	![image](https://github.com/user-attachments/assets/3a6ab0a6-2f44-4f6e-a4c7-f0313e679d59)


2. **Voucher Details**
	![image](https://github.com/user-attachments/assets/789107bd-8382-4408-ab8b-029fb19a2ac5)
	![image](https://github.com/user-attachments/assets/6bd0afcc-e5cd-4b9d-9ee0-ad912c066938)
	![image](https://github.com/user-attachments/assets/6acea85b-abf0-49ac-ac7a-f981451d29a0)
	![image](https://github.com/user-attachments/assets/e698aad2-90d3-4b17-b262-06ff28376a26)


3. **Payment Receipt**
	Upload Transfer Receipt
	![image](https://github.com/user-attachments/assets/0837cf91-a9ce-4c48-b0a4-c70894dcd2fb)
	Waiting for verification by admin
	![image](https://github.com/user-attachments/assets/4ca418bc-0bca-4e5e-ba50-f10ee0af5ec0)
	Verified
	![image](https://github.com/user-attachments/assets/55547915-9210-45d3-9d2b-15e5062a9d4e)


4. **Find Receipt by Id Games**
	![Screenshot 2025-01-16 203409](https://github.com/user-attachments/assets/25bc42f2-c7b1-4672-83dd-9c5e76f23f0e)


5. **Transaction History**
	![image](https://github.com/user-attachments/assets/ad2e9f76-2ab6-44a1-8068-8564bdf82374)


6. **Message site**
   ![Screenshot 2025-01-16 203606](https://github.com/user-attachments/assets/ac2f32bb-4840-44c8-a7e8-6412c1b74798)


7. **Login + Register**
	![Screenshot 2025-01-16 203752](https://github.com/user-attachments/assets/56963554-04a7-4149-b233-2d54b194b57f)
	![Screenshot 2025-01-16 203925](https://github.com/user-attachments/assets/2a2539da-004c-4e47-8438-c566c938c01a)

8. **Admin Login**
![image](https://github.com/user-attachments/assets/d66b51af-8ac8-4966-8bbc-7e784ed34d7c)


9. **Admin Home Page**
![image](https://github.com/user-attachments/assets/a90df1e6-813f-4a80-8d81-a11c57619102)


10. **CRUD Page**
![Screenshot 2025-01-16 204207](https://github.com/user-attachments/assets/3144157f-b9c4-4542-bff5-76cc3ab93e3a)
![image](https://github.com/user-attachments/assets/6ddb9eb3-f493-4a5d-bdc1-6f891c690409)
![image](https://github.com/user-attachments/assets/4d527597-7ff3-4d6a-828b-ff8fb5d13b66)
![Uploading image.png…]()


12. **Receipt Verification and Management**
![image](https://github.com/user-attachments/assets/c781fee2-9041-4875-88f8-c50a1e959527)

---

## 🤝 Contribution

Contributions are welcome! Feel free to fork the repository, make changes, and submit a pull request.

---

## 📝 License

This project is licensed under the [MIT License](LICENSE).

---

## 👤 Author

- @arulzkash
- @RaffiArdhiN
