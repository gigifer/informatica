/*drop database mapache*/

create database mapache;
use mapache;

create table categorias(
id_categoria int unsigned auto_increment,
descripcion varchar(50) not null,
primary key(id_categoria)
);

create table promociones(
id_promocion int unsigned auto_increment,
descripcion varchar(50) not null,
fec_inicio datetime not null,
fec_fin datetime,
primary key(id_promocion)
);

create table estados(
id_estado int unsigned auto_increment,
descripcion varchar(50) not null,
primary key(id_estado)
);

create table formas_de_pago(
id_forma_de_pago int unsigned auto_increment,
descripcion varchar(50) not null,
primary key(id_forma_de_pago)
);

create table permisos(
id_permiso int unsigned auto_increment,
descripcion varchar(50) not null,
primary key(id_permiso)
);

create table paises(
id_pais int unsigned auto_increment,
descripcion varchar(50) not null,
primary key(id_pais)
);

create table provincias(
id_provincia int unsigned auto_increment,
descripcion varchar(50) not null,
id_pais int unsigned,
primary key(id_provincia),
foreign key (id_pais) references paises(id_pais)
);

create table ciudades(
id_ciudad int unsigned auto_increment,
descripcion varchar(50) not null,
id_provincia int unsigned,
primary key(id_ciudad),
foreign key (id_provincia) references provincias(id_provincia)
);

create table barrios(
id_barrio int unsigned auto_increment,
descripcion varchar(50) not null,
id_ciudad int unsigned,
primary key(id_barrio),
foreign key (id_ciudad) references ciudades(id_ciudad)
);

create table usuarios(
id_usuario int unsigned auto_increment,
nombre_usuario varchar(50) not null,
email varchar(50) not null,
contraseña varchar(50) not null,
foto varchar(100),
dir_calle varchar(50),
dir_nro int,
nombre varchar(50),
apellido varchar(50),
fec_nac datetime,
id_barrio int unsigned,
primary key(id_usuario),
foreign key (id_barrio) references barrios(id_barrio)
);

create table permisos_x_usuarios(
id_permiso_x_usuario int unsigned auto_increment,
id_usuario int unsigned not null,
id_permiso int unsigned not null,
primary key(id_permiso_x_usuario),
foreign key(id_usuario) references usuarios(id_usuario),
foreign key(id_permiso) references permisos(id_permiso)
);

create table empresas(
id_empresa int unsigned auto_increment,
razon_social varchar(50) not null,
dir_calle varchar(50),
dir_nro int,
id_barrio int unsigned,
primary key(id_empresa),
foreign key(id_barrio) references barrios(id_barrio)
);

create table sucursales(
id_sucursal int unsigned auto_increment,
descripcion varchar(50),
id_empresa int unsigned not null,
primary key(id_sucursal),
foreign key(id_empresa) references empresas(id_empresa)
);

create table envios(
id_envio int unsigned auto_increment,
id_sucursal int unsigned not null,
costo float not null,
id_estado int unsigned not null,
primary key(id_envio),
foreign key(id_sucursal) references sucursales(id_sucursal),
foreign key(id_estado) references estados(id_estado)
);

create table facturas(
nro_factura int unsigned auto_increment,
fecha datetime,
id_empresa int unsigned not null,
id_usuario int unsigned not null,
fec_vencimiento datetime not null,
id_envio int not null,
id_forma_de_pago int unsigned not null,
primary key(nro_factura),
foreign key(id_empresa) references empresas(id_empresa),
foreign key(id_usuario) references usuarios(id_usuario),
foreign key(id_forma_de_pago) references formas_de_pago(id_forma_de_pago)
);

create table marcas(
id_marca int unsigned auto_increment,
descripcion varchar(50),
id_pais int unsigned,
primary key(id_marca),
foreign key(id_pais) references paises(id_pais)
);

create table tipos_de_productos(
id_tipo_de_producto int unsigned auto_increment,
descripcion varchar(50),
primary key(id_tipo_de_producto)
);

create table productos(
cod_producto int unsigned auto_increment,
nombre varchar(50) not null,
descripcion text,
foto varchar(100),
pre_unitario double not null,
id_marca int unsigned,
id_tipo_de_producto int unsigned,
primary key(cod_producto),
foreign key(id_marca) references marcas(id_marca),
foreign key(id_tipo_de_producto) references tipos_de_productos(id_tipo_de_producto)
);

create table promociones_x_productos(
id_promocion_x_producto int unsigned auto_increment,
id_promocion int unsigned not null,
cod_producto int unsigned not null,
primary key(id_promocion_x_producto),
foreign key(id_promocion) references promociones(id_promocion),
foreign key(cod_producto) references productos(cod_producto)
);

create table detalle_de_facturas(
id_detalle_factura int unsigned auto_increment,
nro_factura int unsigned not null,
cod_producto int unsigned not null,
pre_unitario double not null,
cantidad int,
primary key(id_detalle_factura),
foreign key(nro_factura) references facturas(nro_factura),
foreign key(cod_producto) references productos(cod_producto)
);

create table categorias_x_productos(
id_categoria_x_producto int unsigned auto_increment,
id_categoria int unsigned not null,
cod_producto int unsigned not null,
primary key(id_categoria_x_producto),
foreign key(id_categoria) references categorias(id_categoria),
foreign key(cod_producto) references productos(cod_producto)
);

#datos para la tabla paises
insert into paises values(default,'Argentina');
insert into paises values(default,'Brasi');
insert into paises values(default,'Chile');
insert into paises values(default,'China');
insert into paises values(default,'Estados Unidos');
insert into paises values(default,'Suiza');

#datos para la tabla marcas
insert into marcas values(default, 'Acer', 4);
insert into marcas values(default, 'HP', 5);
insert into marcas values(default, 'Logitech', 6);
insert into marcas values(default, 'CX', 1);
insert into marcas values(default, 'Razer', 5);

#datos para la tabla tipos de productos
insert into tipos_de_productos values(default, 'Notebook');
insert into tipos_de_productos values(default, 'Teclados');
insert into tipos_de_productos values(default, 'PC de escritorio');

#datos para la tabla productos
insert into productos values(default, 'Notebook Acer', 
'Notebook 14-cm0045la Amd A4 Ram 4gb Dd 64gb Radeon R3 W10 Sistema operativo:Windows 10 Home en modo S Memoria (RAM) 4GB Procesador AMD Dual-Core serie Tamaño de pantalla: 14"', 'http://localhost/leo/img/notebook1.jpg'
, 115.70, 1, 1);
insert into productos values(default, 'Notebook CX', 
'Pantalla: 11.6” - Formato 16:9, Procesador: Intel Atom x5 - Z8350 1.44 Ghz, Memoria RAM: 2GB DDR3L, Almacenamiento: 32GB, Sistema operativo: Windows 10 Home.', 'http://localhost/leo/img/notebook2.jpg'
, 115.70, 4, 1);
insert into productos values(default, 'Notebook HP', 
'ProBook 450 G5 Laptop (2ST09UT#ABA) Intel i5-8250U, 8GB RAM, 256GB SSD, 15.6-in FHD 1920x1080, Win10 Pro.', 'http://localhost/leo/img/notebook3.jpg'
, 115.70, 2, 1);
insert into productos values(default, 'Notebook HP', 
'ProBook 450 G5 Laptop (2ST09UT#ABA) Intel i5-8250U, 8GB RAM, 256GB SSD, 15.6-in FHD 1920x1080, Win10 Pro.', 'http://localhost/leo/img/pc3.jpg'
, 113.70, 2, 1);
insert into productos values(default, 'PC Completa Hogar', 
'Rendimiento: Pc de escritorio equipada con un potente Procesador Intel Core i5, 8GB de memoria RAM (expansible a 32GB) y almacenamiento SSD de 240GB.', 'http://localhost/leo/img/pc1.jpg'
, 123.70, 2, 3);
insert into productos values(default, 'PC Completa Oficina', 
'PC ideal para disfrutar de tus actividades diarias de ocio y de oficina. Cuenta con un poderoso micro procesador capaz de brindar un rendimiento óptimo en aplicaciones de todo tipo e inclusive disfrutar de algunos videojuegos.', 
'http://localhost/leo/img/pc2.jpg', 156.23, 1, 3);
insert into productos values(default, 'Teclado Logitech', 
'Este teclado de 87 teclas brinda todo lo que un jugador profesional exige, sin necesidad del teclado numérico. Alloy FPS Pro cuenta con los interruptores mecánicos con cables con gran capacidad de respuesta CHERRY® MX.', 
'http://localhost/leo/img/teclado1.jpg', 58.90, 3, 2);
insert into productos values(default, 'Teclado Razer', 
'Este teclado alto rendimiento hará que disfrutes de horas ilimitadas de juego. Está diseñado especialmente para que puedas expresar tanto tus habilidades como tu estilo.', 
'http://localhost/leo/img/teclado2.jpg', 65.90, 5, 2);
insert into productos values(default, 'Teclado Logitech Mini', 
'Este teclado alto rendimiento hará que disfrutes de horas ilimitadas de juego. Está diseñado especialmente para que puedas expresar tanto tus habilidades como tu estilo.', 
'http://localhost/leo/img/teclado3.jpg', 51.90, 3, 2);

#datos para la tabla provincias
insert into provincias values(default, 'Buenos Aires', 1);
insert into provincias values(default, 'Córdoba', 1);
insert into provincias values(default, 'Entre Rios', 1);
insert into provincias values(default, 'Jujuy', 1);
insert into provincias values(default, 'Mendoza', 1);
insert into provincias values(default, 'Misiones', 1);
insert into provincias values(default, 'Santa Fe', 1);

#datos para la tabla ciudades
insert into ciudades values(default, 'Alta Gracia', 2);
insert into ciudades values(default, 'Carlos Paz', 2);
insert into ciudades values(default, 'Córdoba', 2);
insert into ciudades values(default, 'San Francisco', 2);

#datos para la tabla barrios
insert into barrios values(default, 'Alberdi', 3);
insert into barrios values(default, 'Alta Córdoba', 3);
insert into barrios values(default, 'Centro', 3);
insert into barrios values(default, 'Cofico', 3);
insert into barrios values(default, 'General Paz', 3);
insert into barrios values(default, 'Nueva Córdoba', 3);

#datos para la tabla estados
insert into estados values(default, 'Preregistrado');
insert into estados values(default, 'Admitido');
insert into estados values(default, 'Clasificado');
insert into estados values(default, 'En tránsito');
insert into estados values(default, 'Alta en la unidad de reparto');
insert into estados values(default, 'En reparto');
insert into estados values(default, 'En proceso de entrega');
insert into estados values(default, 'Reencaminado');
insert into estados values(default, 'Redireccionado');
insert into estados values(default, 'Llegada a oficina de destino');
insert into estados values(default, 'Realizado intento de entrega');
insert into estados values(default, 'A disposición del destinatario');
insert into estados values(default, 'Entregado');
insert into estados values(default, 'Retorno a remitente / En proceso de devolución');

#datos para la tabla formas de pago
insert into formas_de_pago values(default, 'Efectivo');
insert into formas_de_pago values(default, 'Cheque');
insert into formas_de_pago values(default, 'Contrareembolso');
insert into formas_de_pago values(default, 'Tarjeta de crédito');
insert into formas_de_pago values(default, 'Tarjeta de déebito');
insert into formas_de_pago values(default, 'Transferencia bancaria');
insert into formas_de_pago values(default, 'Pago en línea');
insert into formas_de_pago values(default, 'Moneda virtual');





