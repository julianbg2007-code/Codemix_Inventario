

<?php

return [


    'roles' => [


        'Administrador' => [
            '*', //tiene acceso a todos los permisos de la app
        ],

        'Cajero' => [

            // Panel principal
            'dashboard.ver',

            // Productos (solo consulta)
            'productos.ver',
            'productos.buscar',
            'productos.ver_stock',
            'productos.ver_detalles',

            // Categorías (solo consulta)
            'categorias.ver',
            'categorias.buscar',

            // Proveedores (solo consulta)
            'proveedores.ver',
            'proveedores.buscar',

            // Compras (solo consulta)
            'compras.ver',
            'compras.buscar',
            'compras.ver_detalles',

            // Detalles de compra (solo consulta)
            'detalle_compra.ver',
            'detalle_compra.buscar',

            // Ventas
            'ventas.ver',
            'ventas.buscar',
            'ventas.crear',
            'ventas.editar',
            'ventas.anular',
            'ventas.ver_detalles',
            'ventas.aplicar_descuento',
            'ventas.generar_factura',
            'ventas.registrar_devolucion',

            // Detalles de venta
            'detalle_venta.ver',
            'detalle_venta.crear',
            'detalle_venta.editar',
            'detalle_venta.buscar',

            // Movimientos de stock (solo consulta)
            'movimientos_stock.ver',
            'movimientos_stock.buscar',
            'movimientos_stock.ver_detalles',

            // Caja
            'caja.ver',
            'caja.abrir',
            'caja.cerrar',
            'caja.ver_historial',
            'caja.ver_resumen',

            // Notificaciones
            'notificaciones.ver',
            'notificaciones.ver_propias',
            'notificaciones.marcar_como_leida',

            // Reportes
            'reportes.ver',
            'reportes.ventas',
            'reportes.ventas_diarias',
            'reportes.ventas_semanales',
            'reportes.ventas_mensuales',
            'reportes.productos_mas_vendidos',
            'reportes.exportar_pdf',
            'reportes.exportar_excel',

            // Recuperación de contraseña propia
            'recuperacion_contrasena.solicitar',
            'recuperacion_contrasena.verificar_codigo',
            'recuperacion_contrasena.restablecer',
        ],

        'Bodega' => [

            // Panel principal
            'dashboard.ver',

            // Productos
            'productos.ver',
            'productos.buscar',
            'productos.ver_detalles',
            'productos.crear',
            'productos.editar',
            'productos.eliminar',
            'productos.actualizar_stock',
            'productos.ver_stock',
            'productos.ver_fechas_vencimiento',
            'productos.ver_stock_bajo',

            // Categorías
            'categorias.ver',
            'categorias.buscar',
            'categorias.crear',
            'categorias.editar',

            // Proveedores
            'proveedores.ver',
            'proveedores.buscar',
            'proveedores.crear',
            'proveedores.editar',

            // Compras
            'compras.ver',
            'compras.buscar',
            'compras.crear',
            'compras.editar',
            'compras.ver_detalles',
            'compras.registrar_recepcion',
            'compras.registrar_pago',

            // Detalles de compra
            'detalle_compra.ver',
            'detalle_compra.buscar',
            'detalle_compra.crear',
            'detalle_compra.editar',

            // Detalles de venta (solo consulta)
            'detalle_venta.ver',
            'detalle_venta.buscar',

            // Movimientos de stock
            'movimientos_stock.ver',
            'movimientos_stock.buscar',
            'movimientos_stock.ver_detalles',
            'movimientos_stock.crear',
            'movimientos_stock.editar',
            'movimientos_stock.registrar_entrada',
            'movimientos_stock.registrar_salida',
            'movimientos_stock.ajustar_inventario',

            // Notificaciones
            'notificaciones.ver',
            'notificaciones.ver_propias',
            'notificaciones.marcar_como_leida',

            // Reportes de inventario
            'reportes.ver',
            'reportes.inventario',
            'reportes.stock_actual',
            'reportes.stock_bajo',
            'reportes.productos_vencidos',
            'reportes.productos_por_vencer',
            'reportes.movimientos_stock',
            'reportes.compras',
            'reportes.exportar_pdf',
            'reportes.exportar_excel',

            // Recuperación de contraseña propia
            'recuperacion_contrasena.solicitar',
            'recuperacion_contrasena.verificar_codigo',
            'recuperacion_contrasena.restablecer',
        ],
    ],
   


    //aca   estan todos los permisos que contiene el proyecto codemix 
    'permissions' => [

        // Panel principal
        'dashboard.ver' => 'Consultar el panel principal del sistema',

        // Autenticación
        'autenticacion.iniciar_sesion' => 'Iniciar sesión en el sistema',
        'autenticacion.cerrar_sesion' => 'Cerrar sesión en el sistema',
        'autenticacion.ver_perfil' => 'Consultar el perfil del usuario autenticado',
        'autenticacion.actualizar_token' => 'Actualizar el token de autenticación',

        // Productos
        'productos.ver' => 'Consultar los productos registrados',
        'productos.buscar' => 'Buscar productos',
        'productos.ver_detalles' => 'Consultar los detalles de un producto',
        'productos.crear' => 'Registrar nuevos productos',
        'productos.editar' => 'Actualizar la información de los productos',
        'productos.eliminar' => 'Eliminar productos',
        'productos.actualizar_stock' => 'Actualizar las existencias de los productos',
        'productos.ver_stock' => 'Consultar las existencias actuales',
        'productos.ver_fechas_vencimiento' => 'Consultar las fechas de vencimiento',
        'productos.ver_stock_bajo' => 'Consultar productos con stock bajo',

        // Categorías
        'categorias.ver' => 'Consultar las categorías registradas',
        'categorias.buscar' => 'Buscar categorías',
        'categorias.ver_detalles' => 'Consultar los detalles de una categoría',
        'categorias.crear' => 'Registrar nuevas categorías',
        'categorias.editar' => 'Actualizar categorías',
        'categorias.eliminar' => 'Eliminar categorías',
        'categorias.cambiar_estado' => 'Cambiar el estado de las categorías',

        // Proveedores
        'proveedores.ver' => 'Consultar los proveedores registrados',
        'proveedores.buscar' => 'Buscar proveedores',
        'proveedores.ver_detalles' => 'Consultar los detalles de un proveedor',
        'proveedores.crear' => 'Registrar nuevos proveedores',
        'proveedores.editar' => 'Actualizar información de proveedores',
        'proveedores.eliminar' => 'Eliminar proveedores',
        'proveedores.cambiar_estado' => 'Cambiar el estado de los proveedores',

        // Compras
        'compras.ver' => 'Consultar las compras registradas',
        'compras.buscar' => 'Buscar compras',
        'compras.ver_detalles' => 'Consultar los detalles de una compra',
        'compras.crear' => 'Registrar nuevas compras',
        'compras.editar' => 'Actualizar compras',
        'compras.eliminar' => 'Eliminar compras',
        'compras.registrar_recepcion' => 'Registrar la recepción de una compra',
        'compras.registrar_pago' => 'Registrar los pagos de una compra',
        'compras.anular' => 'Anular compras',

        // Detalles de compra
        'detalle_compra.ver' => 'Consultar los detalles de las compras',
        'detalle_compra.buscar' => 'Buscar detalles de compra',
        'detalle_compra.crear' => 'Agregar productos a una compra',
        'detalle_compra.editar' => 'Actualizar detalles de compra',
        'detalle_compra.eliminar' => 'Eliminar productos de una compra',

        // Ventas
        'ventas.ver' => 'Consultar las ventas registradas',
        'ventas.buscar' => 'Buscar ventas',
        'ventas.ver_detalles' => 'Consultar los detalles de una venta',
        'ventas.crear' => 'Registrar nuevas ventas',
        'ventas.editar' => 'Actualizar ventas',
        'ventas.anular' => 'Anular ventas',
        'ventas.aplicar_descuento' => 'Aplicar descuentos a las ventas',
        'ventas.generar_factura' => 'Generar facturas de venta',
        'ventas.registrar_devolucion' => 'Registrar devoluciones de productos',

        // Detalles de venta
        'detalle_venta.ver' => 'Consultar los detalles de venta',
        'detalle_venta.buscar' => 'Buscar detalles de venta',
        'detalle_venta.crear' => 'Agregar productos a una venta',
        'detalle_venta.editar' => 'Actualizar detalles de venta',
        'detalle_venta.eliminar' => 'Eliminar productos de una venta',

        // Movimientos de stock
        'movimientos_stock.ver' => 'Consultar los movimientos de inventario',
        'movimientos_stock.buscar' => 'Buscar movimientos de inventario',
        'movimientos_stock.ver_detalles' => 'Consultar los detalles de un movimiento',
        'movimientos_stock.crear' => 'Registrar nuevos movimientos de inventario',
        'movimientos_stock.editar' => 'Actualizar movimientos de inventario',
        'movimientos_stock.eliminar' => 'Eliminar movimientos de inventario',
        'movimientos_stock.registrar_entrada' => 'Registrar entradas de productos',
        'movimientos_stock.registrar_salida' => 'Registrar salidas de productos',
        'movimientos_stock.ajustar_inventario' => 'Realizar ajustes de inventario',

        // Caja
        'caja.ver' => 'Consultar la información de caja',
        'caja.abrir' => 'Realizar la apertura de caja',
        'caja.cerrar' => 'Realizar el cierre de caja',
        'caja.ver_historial' => 'Consultar el historial de caja',
        'caja.ver_resumen' => 'Consultar los resúmenes de caja',

        // Notificaciones
        'notificaciones.ver' => 'Consultar las notificaciones del sistema',
        'notificaciones.ver_propias' => 'Consultar las notificaciones propias',
        'notificaciones.crear' => 'Crear notificaciones',
        'notificaciones.editar' => 'Actualizar notificaciones',
        'notificaciones.eliminar' => 'Eliminar notificaciones',
        'notificaciones.marcar_como_leida' => 'Marcar notificaciones como leídas',
        'notificaciones.marcar_todas_como_leidas' => 'Marcar todas las notificaciones como leídas',

        // Reportes
        'reportes.ver' => 'Consultar los reportes del sistema',
        'reportes.ventas' => 'Consultar reportes de ventas',
        'reportes.ventas_diarias' => 'Consultar reportes de ventas diarias',
        'reportes.ventas_semanales' => 'Consultar reportes de ventas semanales',
        'reportes.ventas_mensuales' => 'Consultar reportes de ventas mensuales',
        'reportes.productos_mas_vendidos' => 'Consultar los productos más vendidos',
        'reportes.inventario' => 'Consultar reportes de inventario',
        'reportes.stock_actual' => 'Consultar reportes de existencias actuales',
        'reportes.stock_bajo' => 'Consultar reportes de stock bajo',
        'reportes.productos_vencidos' => 'Consultar productos vencidos',
        'reportes.productos_por_vencer' => 'Consultar productos próximos a vencer',
        'reportes.movimientos_stock' => 'Consultar reportes de movimientos de inventario',
        'reportes.compras' => 'Consultar reportes de compras',
        'reportes.ganancias' => 'Consultar reportes de ganancias',
        'reportes.perdidas' => 'Consultar reportes de pérdidas',
        'reportes.exportar_pdf' => 'Exportar reportes en formato PDF',
        'reportes.exportar_excel' => 'Exportar reportes en formato Excel',

        // Usuarios
        'usuarios.ver' => 'Consultar los usuarios registrados',
        'usuarios.buscar' => 'Buscar usuarios',
        'usuarios.ver_detalles' => 'Consultar los detalles de un usuario',
        'usuarios.crear' => 'Registrar nuevos usuarios',
        'usuarios.editar' => 'Actualizar información de usuarios',
        'usuarios.eliminar' => 'Eliminar usuarios',
        'usuarios.cambiar_estado' => 'Cambiar el estado de los usuarios',
        'usuarios.asignar_rol' => 'Asignar roles a los usuarios',
        'usuarios.restablecer_contrasena' => 'Restablecer contraseñas de usuarios',

        // Roles
        'roles.ver' => 'Consultar los roles del sistema',
        'roles.buscar' => 'Buscar roles',
        'roles.ver_detalles' => 'Consultar los detalles de un rol',
        'roles.crear' => 'Crear nuevos roles',
        'roles.editar' => 'Actualizar roles',
        'roles.eliminar' => 'Eliminar roles',
        'roles.asignar_permisos' => 'Asignar permisos a los roles',

        // Historial de accesos
        'accesos.ver' => 'Consultar el historial de accesos',
        'accesos.buscar' => 'Buscar registros de acceso',
        'accesos.ver_detalles' => 'Consultar los detalles de un acceso',
        'accesos.filtrar_por_usuario' => 'Filtrar accesos por usuario',
        'accesos.filtrar_por_dispositivo' => 'Filtrar accesos por dispositivo',
        'accesos.filtrar_por_navegador' => 'Filtrar accesos por navegador',
        'accesos.filtrar_por_ubicacion' => 'Filtrar accesos por ubicación',
        'accesos.filtrar_por_fecha' => 'Filtrar accesos por fecha',
        'accesos.filtrar_por_estado' => 'Filtrar accesos por estado',

        // Configuración
        'configuracion.ver' => 'Consultar la configuración del sistema',
        'configuracion.editar' => 'Editar la configuración del sistema',
        'configuracion.actualizar' => 'Actualizar la configuración del sistema',

        // Recuperación de contraseña
        'recuperacion_contrasena.ver' => 'Consultar registros de recuperación de contraseña',
        'recuperacion_contrasena.solicitar' => 'Solicitar recuperación de contraseña',
        'recuperacion_contrasena.verificar_codigo' => 'Verificar el código de recuperación',
        'recuperacion_contrasena.restablecer' => 'Restablecer la contraseña',
        'recuperacion_contrasena.eliminar' => 'Eliminar registros de recuperación',
    ],

];
