CREATE DATABASE alquilartemis;
USE alquilartemis;

CREATE TABLE Empleados (
    empleado_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre_empleado VARCHAR (50) NOT NULL,
    edad_empleado INT NOT NULL,
    telefono_empleado VARCHAR (20) NOT NULL,
    cedula_empleado VARCHAR (20) NOT NULL
);

CREATE TABLE Clientes (
    cliente_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre_cliente VARCHAR (50) NOT NULL,
    edad_cliente INT NOT NULL,
    telefono_cliente VARCHAR (20) NOT NULL,
    cedula_cliente VARCHAR (20) NOT NULL
);

CREATE TABLE Productos (
    producto_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre_producto VARCHAR (50) NOT NULL,
    precio_producto FLOAT NOT NULL,
    peso_producto VARCHAR (50) NOT NULL
);

CREATE TABLE Obras (
    obra_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre_obra VARCHAR (50) NOT NULL,
    fecha_obra DATE NOT NULL,
    hora_obra TIME NOT NULL,
    observaciones_obra VARCHAR (100) NOT NULL
);

CREATE TABLE Salidas (
    salida_id INT PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT,
    fecha_salida DATE,
    hora_salida TIME,
    subtotalPeso FLOAT NOT NULL,
    id_empleado INT,
    placaTransporte VARCHAR (20) NOT NULL,
    observaciones_salida VARCHAR (100) NOT NULL,

    FOREIGN KEY (id_cliente) REFERENCES Clientes(cliente_id),
    FOREIGN KEY (id_empleado) REFERENCES Empleados(empleado_id)
);

CREATE TABLE SalidasDetalle (
    salida_detalle_id INT PRIMARY KEY AUTO_INCREMENT,
    id_salida INT,
    id_producto INT,
    id_obra INT,
    cantidad_salida INT NOT NULL,
    cantidad_propia_salida INT NOT NULL,
    cantidad_subalquilada_salida INT NOT NULL,
    valor_unidad FLOAT NOT NULL,
    fecha_standBye DATE,
    estado VARCHAR (40),
    valor_total FLOAT NOT NULL,
    id_empleado INT,

    FOREIGN KEY (id_salida) REFERENCES Salidas(salida_id),
    FOREIGN KEY (id_producto) REFERENCES Productos(producto_id),
    FOREIGN KEY (id_obra) REFERENCES Obras(obra_id),
    FOREIGN KEY (id_empleado) REFERENCES Empleados(empleado_id)
);

CREATE TABLE Entradas (
    entrada_id INT PRIMARY KEY AUTO_INCREMENT,
    id_salida INT,
    id_empleado INT,
    id_cliente INT,
    fecha_entrada DATE,
    hora_entrada TIME,
    observaciones_entrada VARCHAR (100),

    FOREIGN KEY (id_salida) REFERENCES Salidas(salida_id),
    FOREIGN KEY (id_empleado) REFERENCES Empleados(empleado_id),
    FOREIGN KEY (id_cliente) REFERENCES Clientes(cliente_id)
);

CREATE TABLE EntradasDetalle (
    entrada_detalle_id INT PRIMARY KEY AUTO_INCREMENT,
    id_entrada INT,
    id_producto INT,
    id_obra INT,
    cantidad_entrada INT NOT NULL,
    cantidad_propia_entrada INT NOT NULL,
    cantidad_subalquilada_entrada INT NOT NULL,
    estado VARCHAR (40),

    FOREIGN KEY (id_entrada) REFERENCES Entradas(entrada_id),
    FOREIGN KEY (id_producto) REFERENCES Productos(producto_id),
    FOREIGN KEY (id_obra) REFERENCES Obras(obra_id)
);

CREATE TABLE Inventario (
    inventario_id INT PRIMARY KEY AUTO_INCREMENT,
    id_producto INT,
    cantidad_inicial INT NOT NULL,
    cantidad_ingresos INT NOT NULL,
    cantidad_salidas INT NOT NULL,
    cantidad_final INT NOT NULL,
    fecha_inventario DATE,
    tipo_operacion VARCHAR(70),

    FOREIGN KEY (id_producto) REFERENCES Productos(producto_id)
);

CREATE TABLE Liquidaciones (
    liquidacion_id INT PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT,
    producto_liquidado VARCHAR(50),
    fecha_liquidacion DATE,
    precio_total FLOAT NOT NULL,
    metodo_pago VARCHAR(50),

    FOREIGN KEY (id_cliente) REFERENCES Clientes(cliente_id)
);