const fetchData = async () => {
    try {
        const response = await fetch('http://localhost:3000/', {
            method: 'GET',
            // Você pode adicionar mais opções de configuração aqui, como headers, etc.
        });

        if (!response.ok) {
            throw new Error('Erro na requisição');
        }

        const data = await response.json();
        console.log('Dados recebidos:', data);
    } catch (error) {
        console.error('Erro ao buscar dados:', error);
    }
};

fetchData();
