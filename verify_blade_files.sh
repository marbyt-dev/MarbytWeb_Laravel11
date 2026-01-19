#!/bin/bash
# Script para limpiar caché y verificar archivos Blade

echo "=== Limpieza de caché de Laravel ==="
php artisan view:clear
php artisan cache:clear
php artisan config:clear
php artisan route:clear

echo ""
echo "=== Verificando archivos Blade ==="

echo "1. Verificando header.blade.php..."
if [ -f "resources/views/layouts/header.blade.php" ]; then
    # Contar @if y @endif
    if_count=$(grep -o "@if" resources/views/layouts/header.blade.php | wc -l)
    endif_count=$(grep -o "@endif" resources/views/layouts/header.blade.php | wc -l)
    echo "   @if: $if_count | @endif: $endif_count"
fi

echo "2. Verificando home.blade.php..."
if [ -f "resources/views/home.blade.php" ]; then
    if_count=$(grep -o "@if" resources/views/home.blade.php | wc -l)
    endif_count=$(grep -o "@endif" resources/views/home.blade.php | wc -l)
    echo "   @if: $if_count | @endif: $endif_count"
fi

echo "3. Verificando modals.blade.php..."
if [ -f "resources/views/layouts/modals.blade.php" ]; then
    if_count=$(grep -o "@if" resources/views/layouts/modals.blade.php | wc -l)
    endif_count=$(grep -o "@endif" resources/views/layouts/modals.blade.php | wc -l)
    echo "   @if: $if_count | @endif: $endif_count"
fi

echo "4. Verificando navbar.blade.php..."
if [ -f "resources/views/layouts/navbar.blade.php" ]; then
    if_count=$(grep -o "@if" resources/views/layouts/navbar.blade.php | wc -l)
    endif_count=$(grep -o "@endif" resources/views/layouts/navbar.blade.php | wc -l)
    echo "   @if: $if_count | @endif: $endif_count"
fi

echo ""
echo "=== Buscando @if sin cerrar en todo el proyecto ==="
find resources/views -name "*.blade.php" -exec sh -c '
    file="$1"
    if_count=$(grep -c "@if" "$file" 2>/dev/null || echo 0)
    endif_count=$(grep -c "@endif" "$file" 2>/dev/null || echo 0)
    if [ "$if_count" != "$endif_count" ]; then
        echo "⚠️  DESBALANCEADO: $file (@if: $if_count | @endif: $endif_count)"
    fi
' _ {} \;

echo ""
echo "=== Limpieza completada ===" 
echo "Por favor, intenta acceder a tu aplicación nuevamente."
