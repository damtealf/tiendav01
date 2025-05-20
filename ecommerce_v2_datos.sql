USE ecommerce_v2;

-- Insertar usuarios
INSERT INTO usuarios (nombre, email, password, telefono, redes_sociales) VALUES
('Juan Pérez', 'juan@example.com', '123456', '555-1234', '{"google_id": "juan123"}'),
('Ana López', 'ana@example.com', '123456', '555-5678', '{"facebook_id": "ana.fb"}');

-- Insertar direcciones
INSERT INTO direcciones (id_usuario, direccion, ciudad, estado, codigo_postal, pais) VALUES
(1, 'Av. Siempre Viva 742', 'Springfield', 'Illinois', '62704', 'USA'),
(2, 'Calle Falsa 123', 'Bogotá', 'Cundinamarca', '110111', 'Colombia');

-- Insertar marcas
INSERT INTO marcas (nombre) VALUES
('TechBrand'), ('HouseStuff');

-- Insertar categorías
INSERT INTO categorias (nombre) VALUES
('Electrónica'), ('Hogar');

-- Insertar productos
INSERT INTO productos (nombre, descripcion, precio, descuento, stock, imagen_principal, multimedia, variantes, metadata, id_categoria, id_marca) VALUES
('Smartphone Anexado', 'Teléfono inteligente con IA avanzada.', 699.99, '{"porcentaje":10,"oferta_dia":true}', 25, 'smartphone.jpg',
 '[{"tipo":"imagen","url":"img1.jpg"},{"tipo":"video","url":"video1.mp4"}]',
 '[{"color":"negro","talla":"única","stock":10}]',
 '{"slug":"smartphone-anexado","destacado":true}', 1, 1),

('Laptop Ultraadigada', 'Laptop ultraligera de última generación.', 1099.49, '{"porcentaje":15}', 10, 'laptop.jpg',
 '[{"tipo":"imagen","url":"img2.jpg"}]',
 '[{"color":"gris","talla":"15pulgadas","stock":5}]',
 '{"slug":"laptop-ultraadigada","destacado":false}', 1, 1);

-- Insertar carritos
INSERT INTO carrito (id_usuario, productos) VALUES
(1, '[{"id_producto":1,"cantidad":1},{"id_producto":2,"cantidad":1}]'),
(2, '[{"id_producto":1,"cantidad":2}]');

-- Insertar pedidos
INSERT INTO pedidos (id_usuario, productos, total, estado, direccion_envio) VALUES
(1, '[{"id_producto":1,"cantidad":1,"precio_unitario":699.99}]', 699.99, 'Enviado',
 '{"direccion":"Av. Siempre Viva 742","ciudad":"Springfield"}'),
(2, '[{"id_producto":2,"cantidad":1,"precio_unitario":1099.49}]', 1099.49, 'Procesando',
 '{"direccion":"Calle Falsa 123","ciudad":"Bogotá"}');

-- Insertar opiniones
INSERT INTO opiniones (id_usuario, id_producto, calificacion, comentario) VALUES
(1, 1, 5, 'Excelente producto.'),
(2, 2, 4, 'Muy bueno, pero algo caro.');

-- Insertar historial de precios
INSERT INTO historial_precios (id_producto, precio) VALUES
(1, 749.99),
(2, 1149.49);

-- Insertar cupones
INSERT INTO cupones (id_cupon, tipo_descuento, valor, expiracion, usos_max, json_usuarios_usados) VALUES
('BIENVENIDO10', 'porcentaje', 10.00, '2025-12-31 23:59:59', 100, '[]'),
('ENVIOGRATIS', 'fijo', 50.00, '2025-06-30 23:59:59', 50, '[1]');

-- Insertar logs de usuario
INSERT INTO logs_usuario (id_usuario, evento, descripcion) VALUES
(1, 'login', 'Inicio de sesión exitoso'),
(2, 'compra', 'Pedido #2 procesado');