<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toggle Cards</title>
    <style>
        /* Add your CSS styles here for the card design */
        .card {
            width: 100px;
            height: 100px;
            border: 1px solid rgb(77, 103, 221);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 10px;
            margin: 10px;
            cursor: pointer;
        }

        .card.selected {
            background-color: rgba(77, 103, 221, 0.2);
        }

        .cards-container {
            display: flex;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
    <div>
        <select id="categorySelect">
            <option value="1">Category 1</option>
            <option value="2">Category 2</option>
        </select>
        <button id="selectAllButton">Select All</button>
        <button id="deselectAllButton">Deselect All</button>
    </div>
    <div class="cards-container">
        <!-- Cards will be generated here based on the selected category -->
    </div>

    <script>
        const categorySelect = document.getElementById('categorySelect');
        const selectAllButton = document.getElementById('selectAllButton');
        const deselectAllButton = document.getElementById('deselectAllButton');
        const cardsContainer = document.querySelector('.cards-container');
        let selectedCategory = categorySelect.value;

        categorySelect.addEventListener('change', () => {
            selectedCategory = categorySelect.value;
            generateCards();
        });

        function generateCards() {
            cardsContainer.innerHTML = ''; // Clear existing content

            if (selectedCategory === '1') {
                for (let i = 1; i <= 30; i++) {
                    const card = document.createElement('div');
                    card.className = 'card';
                    card.textContent = i;
                    cardsContainer.appendChild(card);
                }
            } else if (selectedCategory === '2') {
                const surahsInfo = {!! json_encode($surahs_info) !!}; // Provide the JSON data directly from PHP
                for (const surah of surahsInfo) {
                    const card = document.createElement('div');
                    card.className = 'card';
                    card.textContent = surah.surah_name;
                    cardsContainer.appendChild(card);
                }
            }

            // Add event listeners for card selection
            const cardElements = cardsContainer.querySelectorAll('.card');
            cardElements.forEach(card => {
                card.addEventListener('click', () => {
                    card.classList.toggle('selected');
                });
            });
        }

        // Select All button click event
        selectAllButton.addEventListener('click', () => {
            const cardElements = cardsContainer.querySelectorAll('.card');
            cardElements.forEach(card => {
                card.classList.add('selected');
            });
        });

        // Deselect All button click event
        deselectAllButton.addEventListener('click', () => {
            const cardElements = cardsContainer.querySelectorAll('.card');
            cardElements.forEach(card => {
                card.classList.remove('selected');
            });
        });

        // Initial generation of cards based on the selected category
        generateCards();
    </script>
</body>
</html>
