document.addEventListener('DOMContentLoaded', () => {
    const Button = document.getElementById('Button');
    const Exit_Form = document.getElementById('Exit_Form');
    const Popup = document.getElementById('Popup');
    
    if (Button) {
        Button.addEventListener('click', () => {
            Popup.style.display = 'block';
        });
    }
    
    if (Exit_Form) {
        Exit_Form.addEventListener('click', () => {
            Popup.style.display = 'none';
        });
    }
    
    window.addEventListener('popstate', () => {
        Popup.style.display = 'none';
    });

    const Button_Stats = document.getElementById('Button_Stats');
    const Stats = document.getElementById('Stats');
    
    if (Button_Stats) {
        Button_Stats.addEventListener('click', () => {
            fetch('admin.php?action=fetch_stats')
                .then(response => response.json())
                .then(data => {
                    const table = document.createElement('table');
                    let html = '<tr><th>Язык программирования</th><th>Количество использований</th></tr>';
                    data.forEach(row => {
                        html += `<tr><td>${row.name}</td><td>${row.count}</td></tr>`;
                    });
                    table.innerHTML = html;
                    Stats.innerHTML = '';
                    Stats.appendChild(table);
                    Popup.style.display = 'block';
                })
                .catch(error => console.error('Ошибка:', error));
        });
    }
});
