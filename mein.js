function calcularIngresos() {
    const salarioPorHora = parseFloat(document.getElementById('salario').value);
    const horasTrabajadas = parseFloat(document.getElementById('horas').value);

    const ingresosTotales = salarioPorHora * horasTrabajadas;

    // Mostrar el resultado en el párrafo con id "resultado"
    const resultadoElemento = document.getElementById('resultado');
    resultadoElemento.textContent = "Los ingresos totales son: $" + ingresosTotales.toFixed(2);
}
