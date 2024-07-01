CREATE TABLE takipler (
    id INT AUTO_INCREMENT PRIMARY KEY,
    baslik VARCHAR(255) NOT NULL,
    aciklama TEXT,
    tarih DATE NOT NULL,
    kullanici_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Ensar tablo adı finans_takip ve detaylarını ekle
-- Ensar tablo adı sigorta_kasko_takip ve detaylarını ekle
-- Ensar tablo adı garanti_suresi_takip ve detaylarını ekle
-- Ensar tablo adı fatura_takip ve detaylarını ekle
-- Ensar tablo adı hisse_senedi_takip ve detaylarını ekle
