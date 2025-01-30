1️⃣ Open WSL (Ubuntu) and start MySQL and Apache: sudo service mysql start && sudo service apache2 start.
2️⃣ Navigate to Apache root directory: cd /var/www/html/ and open VS Code: code ..
3️⃣ Create necessary PHP files (db_connect.php, index.php, process.php).
4️⃣ Set permissions to avoid issues: sudo chmod -R 777 /var/www/html/.
5️⃣ Open MySQL: mysql -u root -p, create a database (testdb), and a table (users).
6️⃣ Open http://localhost/index.php in your browser, enter details, and submit.
7️⃣ Verify stored data: mysql -u root -p, then USE testdb; followed by SELECT * FROM users;.
8️⃣ Restart services if needed: sudo service apache2 restart && sudo service mysql restart.

![first](https://github.com/user-attachments/assets/21a2537c-2ced-4795-985d-d3d63928a625)
![second](https://github.com/user-attachments/assets/0a6eaf91-174b-4c2b-8235-12cb7d5ec601)
![three](https://github.com/user-attachments/assets/515e0d6e-f6d6-402b-b7b1-646ffb7bd79d)


![four](https://github.com/user-attachments/assets/16a5bd18-1c62-40f2-a373-ce5dfcea072d)

