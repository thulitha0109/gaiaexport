#!/bin/bash
set -e

echo "🚀 Starting Deployment for GaiaExport..."

# Build and start Docker containers
echo "📦 Building Docker Images..."
docker compose up -d --build

# Wait a couple seconds for services and db to properly spin up
sleep 5

# Install composer dependencies
echo "🧩 Installing Composer Dependencies..."
docker compose exec -T app composer install --no-interaction --prefer-dist --optimize-autoloader

# Install Node dependencies and build Vite assets for production
echo "🎨 Building Frontend Assets..."
docker compose exec -T app npm install
docker compose exec -T app npm run build

# Clear cache and optimize
echo "⚡ Optimizing Application..."
docker compose exec -T app php artisan optimize:clear
docker compose exec -T app php artisan config:cache
docker compose exec -T app php artisan route:cache
docker compose exec -T app php artisan view:cache

# Run Migrations
echo "🗄️ Running Migrations against PostgreSQL..."
docker compose exec -T app php artisan migrate --force

echo "✅ Deployment Successful! The application is running."
