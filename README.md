тестовый проект для изучения kubernetes

запуск бд через helm:
helm dependency update ./hello-chart
helm install myapp ./hello-chart

инициация миграции:
kubectl apply -f initdb.yaml