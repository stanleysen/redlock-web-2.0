CREATE DATABASE redlock;
USE redlock;

CREATE TABLE IF NOT EXISTS users (
    ID INT NOT NULL PRIMARY KEY,
    Nama VARCHAR(255) NOT NULL,
    Alamat VARCHAR(255) NOT NULL,
    Jabatan VARCHAR(255) NOT NULL
);

INSERT INTO users (ID, Nama, Alamat, Jabatan) VALUES
(123, 'Stanley Sen', 'Jl. Soekarno Hatta No. 109, Bandung', 'Chief Executive Officer'),
(456, 'Diesel Sen', 'Jl. Boulevard No. 99, Jakarta', 'Project Manager'),
(789, 'Verren Sen', 'Jl. Galunggung No. 7B, Surabaya', 'Secretary'),
(101, 'Janice Sen', 'Jl. Jenderal Katamso No. 123, Medan', 'Treasurer');