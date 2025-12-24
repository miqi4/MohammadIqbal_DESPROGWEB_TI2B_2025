-- Create database lab_ba (run this first if database doesn't exist)
-- CREATE DATABASE lab_ba;

-- Connect to lab_ba database and run the following:

-- Create anggota table
CREATE TABLE IF NOT EXISTS anggota (
    id SERIAL PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    jenis_kelamin CHAR(1) NOT NULL CHECK (jenis_kelamin IN ('L', 'P')),
    alamat TEXT NOT NULL,
    no_telp VARCHAR(20) NOT NULL
);

-- Insert sample data (optional)
INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES
('John Doe', 'L', 'Jl. Merdeka No. 1', '081234567890'),
('Jane Smith', 'P', 'Jl. Sudirman No. 2', '081234567891'),
('Ahmad Rahman', 'L', 'Jl. Thamrin No. 3', '081234567892');