CREATE TABLE cadastro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    idade INT NOT NULL,
    email VARCHAR(100) NOT NULL,
    linguagens VARCHAR(255)
);

-- Exemplo de comando SQL para inserir dados
INSERT INTO cadastro (nome, idade, email, linguagens)
VALUES ('Nome Exemplo', 25, 'exemplo@email.com', 'HTML, CSS, PYTHON');