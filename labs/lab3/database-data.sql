USE waph_lab3;

CREATE TABLE Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

INSERT INTO Users (username, password) VALUES
('alice', '$2y$10$KM6TN21JftVRgA9DvWvm.eFlP3BIJ.ZXeHegqkKBCilYvQywP.WsS'),
('bob', '$2y$10$30.ucfYWpYTNGYa6lq/4WuRaC3GW8yOq9fcS6.RculkyRA3XpVAtC');
