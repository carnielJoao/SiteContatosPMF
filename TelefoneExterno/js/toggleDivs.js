 function toggleContent(element) {
            event.stopPropagation();
            // Encontra a div de conte�do dentro do elemento clicado
            var contentDiv = element.querySelector('.content');

            // Alterna a visibilidade da div de conte�do
            if (contentDiv.style.display === 'none' || contentDiv.style.display === '') {
                contentDiv.style.display = 'block';
            } else {
                contentDiv.style.display = 'none';
            }
        }

        function toggleSubContent(element) {
            event.stopPropagation();
            // Encontra a div de sub-conte�do dentro do elemento clicado
            var subContentDiv = element.querySelector('.sub-content');

            // Alterna a visibilidade da div de sub-conte�do
            if (subContentDiv.style.display === 'none' || subContentDiv.style.display === '') {
                subContentDiv.style.display = 'block';
            } else {
                subContentDiv.style.display = 'none';
            }
        }

        function teste() {
            alert("passou, clicou!!")
        }