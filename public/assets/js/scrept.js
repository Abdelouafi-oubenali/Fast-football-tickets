        // Initialisation des données
        const updateStats = () => {
            const ticketsSold = Math.floor(Math.random() * 40000);
            document.getElementById('ticketsSold').textContent = ticketsSold.toLocaleString();
            document.getElementById('revenue').textContent = 
                `${(ticketsSold * (Math.random() * 50 + 30)).toLocaleString()} €`;
            document.getElementById('vipTickets').textContent = 
                Math.floor(Math.random() * 100);
            document.getElementById('occupancyRate').textContent = 
                `${((ticketsSold / 50000) * 100).toFixed(1)}%`;
        };

        // Graphique de répartition
        const ctx = document.getElementById('stadiumChart').getContext('2d');
        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Tribune Nord', 'Tribune Sud', 'Tribune Est', 'Tribune Ouest', 'VIP'],
                datasets: [{
                    data: [30, 25, 20, 15, 10],
                    backgroundColor: [
                        '#10B981',
                        '#3B82F6',
                        '#F59E0B',
                        '#EF4444',
                        '#8B5CF6'
                    ]
                }]
            }
        });

        // Simulation des ventes récentes
        const generateSales = () => {
            const sales = document.getElementById('recentSales');
            sales.innerHTML = '';
            const categories = ['Standard', 'Premium', 'VIP'];
            const tribunes = ['Nord', 'Sud', 'Est', 'Ouest'];
            
            for(let i = 0; i < 5; i++) {
                const sale = document.createElement('div');
                sale.className = 'flex justify-between items-center p-4 hover:bg-gray-50 rounded-lg';
                sale.innerHTML = `
                    <div>
                        <div class="font-medium">Tribune ${tribunes[Math.floor(Math.random() * tribunes.length)]}</div>
                        <div class="text-sm text-gray-500">${categories[Math.floor(Math.random() * categories.length)]}</div>
                    </div>
                    <div class="font-medium">${Math.floor(Math.random() * 100 + 30)} €</div>
                `;
                sales.appendChild(sale);
            }
        };

        // Tableau des prix
        const generatePriceTable = () => {
            const table = document.getElementById('priceCategories');
            table.innerHTML = '';
            const categories = [
                {name: 'VIP', price: 150, available: 50},
                {name: 'Premium', price: 80, available: 200},
                {name: 'Standard', price: 40, available: 1000},
                {name: 'Réduction', price: 25, available: 500}
            ];

            categories.forEach(cat => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td class="p-4">${cat.name}</td>
                    <td class="p-4">${cat.price} €</td>
                    <td class="p-4">${cat.available} places</td>
                    <td class="p-4">
                        <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                            Modifier
                        </button>
                    </td>
                `;
                table.appendChild(row);
            });
        };

        // Initialisation
        updateStats();
        generateSales();
        generatePriceTable();

        // Mise à jour périodique
        setInterval(() => {
            updateStats();
            generateSales();
        }, 5000);

        // Gestion du changement de match
        document.getElementById('matchSelect').addEventListener('change', () => {
            updateStats();
            generateSales();
            generatePriceTable();
        });


                // Fonctions de gestion du modal
                function openAddMatchModal() {
                    document.getElementById('matchModal').classList.remove('hidden');
                    document.getElementById('modalTitle').textContent = 'Ajouter un match';
                }
        
                function closeModal() {
                    document.getElementById('matchModal').classList.add('hidden');
                }
        
                // Gestion du formulaire
                document.getElementById('matchForm').addEventListener('submit', function(e) {
                    e.preventDefault();
                    // Ajouter ici la logique de sauvegarde
                    closeModal();
                });
        
                // Initialisation
                renderMatches();



                let selectedTribune = '';
                let selectedMatch = '';
                let selectedCategory = '';
                let selectedQuantity = 1;
        
                // Prix par catégorie
                const prices = {
                    'vip': 150,
                    'category1': 80,
                    'category2': 50,
                    'category3': 30
                };
        
                // Fonction de sélection de tribune
                function selectTribune(tribune) {
                    selectedTribune = tribune;
                    document.getElementById('selectedTribune').textContent = 
                        `Tribune ${tribune.charAt(0).toUpperCase() + tribune.slice(1)}`;
                    updateTotal();
                }
        
                // Écouteurs d'événements pour les sélecteurs
                document.getElementById('matchSelect').addEventListener('change', function(e) {
                    selectedMatch = e.target.options[e.target.selectedIndex].text;
                    document.getElementById('selectedMatch').textContent = selectedMatch;
                    updateTotal();
                });
        
                document.getElementById('categorySelect').addEventListener('change', function(e) {
                    selectedCategory = e.target.options[e.target.selectedIndex].text;
                    document.getElementById('selectedCategory').textContent = selectedCategory;
                    updateTotal();
                });
        
                document.getElementById('quantitySelect').addEventListener('change', function(e) {
                    selectedQuantity = parseInt(e.target.value);
                    document.getElementById('selectedQuantity').textContent = `${selectedQuantity} billet(s)`;
                    updateTotal();
                });
        
                // Mise à jour du total
                function updateTotal() {
                    let total = 0;
                    if (selectedCategory) {
                        const category = document.getElementById('categorySelect').value;
                        total = prices[category] * selectedQuantity;
                    }
                    document.getElementById('totalPrice').textContent = `${total} €`;
                }