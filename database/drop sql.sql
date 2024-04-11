create database dropshipping;
use dropshipping;

-- Tabela de Produtos
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    stock_quantity INT NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabela de Categorias
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabela de Clientes
CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabela de Pedidos
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    total_amount DECIMAL(10, 2) NOT NULL,
    status VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (customer_id) REFERENCES customers(id)
);

-- Tabela de Itens do Pedido
CREATE TABLE order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    quantity INT NOT NULL,
    unit_price DECIMAL(10, 2) NOT NULL,
    subtotal DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Tabela de Fornecedores
CREATE TABLE suppliers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    contact_name VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabela de Produtos-Fornecedores (Relacionamento muitos-para-muitos)
CREATE TABLE product_suppliers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    supplier_id INT,
    wholesale_price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (product_id) REFERENCES products(id),
    FOREIGN KEY (supplier_id) REFERENCES suppliers(id)
);

INSERT INTO categories (name)
VALUES
    ('Eletrônicos'),
    ('Roupas'),
    ('Calçados'),
    ('Acessórios'),
    ('Alimentos'),
    ('Móveis'),
    ('Beleza'),
    ('Livros'),
    ('Brinquedos'),
    ('Ferramentas');

INSERT INTO products (name, description, price, stock_quantity)
VALUES
    ('Celular', 'Descrição do Celular', 799.99, 20),
    ('Camiseta', 'Descrição da Camiseta', 29.99, 50),
    ('Tênis', 'Descrição do Tênis', 99.99, 30),
    ('Óculos de Sol', 'Descrição dos Óculos de Sol', 49.99, 40),
    ('Arroz', 'Descrição do Arroz', 9.99, 100),
    ('Sofá', 'Descrição do Sofá', 499.99, 10),
    ('Shampoo', 'Descrição do Shampoo', 19.99, 60),
    ('Livro', 'Descrição do Livro', 39.99, 25),
    ('Boneca', 'Descrição da Boneca', 49.99, 15),
    ('Martelo', 'Descrição do Martelo', 14.99, 20);

INSERT INTO customers (name, email, password, address)
VALUES
    ('João', 'joao@example.com', '123456', 'Rua A, 123'),
    ('Maria', 'maria@example.com', '654321', 'Avenida B, 456'),
    ('José', 'jose@example.com', '987654', 'Rua C, 789'),
    ('Ana', 'ana@example.com', '456789', 'Avenida D, 1011'),
    ('Pedro', 'pedro@example.com', '321654', 'Rua E, 1213'),
    ('Carla', 'carla@example.com', '456123', 'Avenida F, 1415'),
    ('Lucas', 'lucas@example.com', '789123', 'Rua G, 1617'),
    ('Fernanda', 'fernanda@example.com', '123987', 'Avenida H, 1819'),
    ('Mariana', 'mariana@example.com', '654987', 'Rua I, 2021'),
    ('Rafael', 'rafael@example.com', '987123', 'Avenida J, 2223');

INSERT INTO suppliers (name, contact_name, email, phone)
VALUES
    ('Empresa A', 'Contato A', 'contatoa@empresa.com', '123456789'),
    ('Empresa B', 'Contato B', 'contatob@empresa.com', '987654321'),
    ('Empresa C', 'Contato C', 'contatoc@empresa.com', '111222333'),
    ('Empresa D', 'Contato D', 'contatod@empresa.com', '444555666'),
    ('Empresa E', 'Contato E', 'contatoe@empresa.com', '777888999'),
    ('Empresa F', 'Contato F', 'contatof@empresa.com', '999888777'),
    ('Empresa G', 'Contato G', 'contatog@empresa.com', '666555444'),
    ('Empresa H', 'Contato H', 'contatoh@empresa.com', '333222111'),
    ('Empresa I', 'Contato I', 'contatoi@empresa.com', '999111333'),
    ('Empresa J', 'Contato J', 'contatoj@empresa.com', '555444666');

INSERT INTO product_suppliers (product_id, supplier_id, wholesale_price)
VALUES
    (1, 1, 15.00),
    (2, 2, 25.00),
    (3, 3, 35.00),
    (4, 4, 45.00),
    (5, 5, 55.00),
    (6, 6, 65.00),
    (7, 7, 75.00),
    (8, 8, 85.00),
    (9, 9, 95.00),
    (10, 10, 105.00);

INSERT INTO orders (customer_id, total_amount, status)
VALUES
    (1, 199.90, 'Pendente'),
    (2, 299.90, 'Pendente'),
    (3, 399.90, 'Pendente'),
    (4, 499.90, 'Pendente'),
    (5, 599.90, 'Pendente'),
    (6, 699.90, 'Pendente'),
    (7, 799.90, 'Pendente'),
    (8, 899.90, 'Pendente'),
    (9, 999.90, 'Pendente'),
    (10, 1099.90, 'Pendente');

INSERT INTO order_items (order_id, product_id, quantity, unit_price, subtotal)
VALUES
    (8, 9, 4, 99.99, 399.96),
    (9, 10, 1, 109.99, 109.99),
    (10, 1, 2, 19.99, 39.98),
    (10, 2, 3, 29.99, 89.97),
    (9, 3, 1, 39.99, 39.99),
    (8, 4, 2, 49.99, 99.98),
    (7, 5, 3, 59.99, 179.97),
    (6, 6, 4, 69.99, 279.96),
    (5, 7, 1, 79.99, 79.99),
    (4, 8, 2, 89.99, 179.98);

select * from categories;


CREATE TABLE category_product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT,
    product_id INT,
    FOREIGN KEY (category_id) REFERENCES categories(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);


CREATE TABLE product_suppliers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    supplier_id INT,
    wholesale_price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (product_id) REFERENCES products(id),
    FOREIGN KEY (supplier_id) REFERENCES suppliers(id) ON DELETE CASCADE
);
select * from category_product;