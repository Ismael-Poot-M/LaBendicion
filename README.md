Tortillería “La Bendición”

1.- Gestión de Usuarios y Permisos (RBAC)
Roles del sistema:
Administrador (acceso total)
Supervisor
Repartidor (acceso exclusivo a módulo de reparto)
Funcionalidades:
Crear usuario
Editar usuario
Eliminar usuario
Asignar rol
Registro de actividad (log de acciones)
Restricción de acceso por módulo
Historial de modificaciones

2️.- Módulo de Producción
Registro por turno:
Fecha
Turno
Responsable
Kilos producidos
Marca(s) de harina utilizada
Bultos utilizados por marca
Cálculos automáticos:
Consumo de harina
Comparativo producción vs harina utilizada
Registro de merma
Historial diario, semanal y mensual

3️.- Punto de Venta (Mostrador)
Funcionalidades:
Venta por kilo
Venta por medio kilo
Precio configurable
Registro por tipo de cliente (mostrador)
Corte diario automático:
Total vendido
Efectivo
Crédito
Reportes diarios, semanales y mensuales

4️.- Módulo de Reparto y Crédito (Exclusivo Repartidores)

🔹 Gestión de Clientes
Alta
Edición
Eliminación
Asignación a repartidor
Datos:
Nombre del negocio
Responsable
Teléfono
Dirección
Tipo (contado / crédito)
Límite de crédito

🔹 Registro Diario por Cliente
Campos obligatorios:
Fecha
Cliente
Repartidor
Kilos entregados
Kilos devueltos (tortilla fría)
Venta de tortilla fría (kilos y precio especial)
Precio normal por kilo
Total venta normal (automático)
Total venta tortilla fría (automático)
Saldo anterior
Pago recibido (puede corresponder a saldo anterior)
Aplicación automática de pago
Nuevo saldo calculado
Observaciones

🔹 Lógica automática
El sistema debe:
Calcular kilos netos vendidos
Registrar devoluciones
Permitir pago parcial
Aplicar pagos a saldos anteriores
Acumular saldo pendiente
Generar reporte por repartidor
Generar cartera total
Alertar clientes vencidos

5️.- Módulo de Control de Harina (Segmentado por Marca)
Marcas:
Maseca
San Blas
Minsa
Cada marca se controla independiente.

🔹 Registro de Entrada
Fecha
Marca
Bultos recibidos
Bultos existentes antes
Total automático
Proveedor
Costo por bulto

🔹 Registro de Uso
Fecha
Turno
Marca
Bultos utilizados
Responsable

🔹 Control de Préstamos
Fecha préstamo
Marca
Cantidad
A quién se prestó
Fecha estimada devolución
Fecha devolución real
Estatus

🔹 Cálculo automático
Existencia actual = Existencia anterior
Recibidos
Devueltos − Utilizados − Prestados

🔹 Panel de control
Total recibido mensual
Total utilizado
Total prestado
Existencia actual
Consumo promedio diario
Días restantes estimados

6️.- Módulo de Insumos Generales
Aplica para cualquier insumo:
Papel kilo
Papel medio
Teflón
Grasa
Otros
Registro por insumo:
Nombre
Unidad de medida
Existencia actual
Cantidad comprada
Fecha de compra
Proveedor
Costo unitario
Nivel mínimo
Observaciones
Cálculos automáticos:
Total comprado mensual
Total usado mensual
Valor del inventario
Alerta de nivel bajo

7️.- Sistema de Recordatorios Inteligentes
Configurable por insumo:
Consumo promedio
Días de entrega del proveedor
Días no laborables
Tiempo de entrega
Ejemplo harina:
Se pide 1 día antes.
Si cae domingo, se pide viernes.
El sistema calcula automáticamente cuándo generar alerta.
Debe mostrar:
“Pedir hoy”
“Inventario crítico”
“Riesgo de desabasto”

8️.- Control de Personal
Registro entrada/salida
Horas trabajadas
Incidencias
Historial por empleado
Reporte mensual

9️.- Checklist Diario de Supervisión
Inicio de producción puntual
Revisión maquinaria
Limpieza
Refrigeradores
Cierre correcto
Incidencias
Firma digital
Historial por fecha.

10.- Reportes Generales
Producción vs ventas
Merma diaria
Consumo de harina mensual
Ventas por repartidor
Ventas por cliente
Cartera total
Cartera vencida
Ticket promedio
Utilidad estimada
Productividad por empleado

11.- Seguridad y Auditoría
Registro de modificaciones
Bloqueo de edición retroactiva
Historial de cambios
Respaldo automático
Control por dispositivo

12.- Características Técnicas Recomendadas
Sistema web o híbrido
Base de datos robusta
Soporte multiusuario
Posibilidad modo offline para repartidores
Sincronización automática
Exportación a Excel / PDF

Resultado Esperado
La app debe permitir:
Control exacto de harina
Control real de cartera
Eliminación de fugas
Planeación de abastecimiento
Supervisión profesional
Escalabilidad futura
