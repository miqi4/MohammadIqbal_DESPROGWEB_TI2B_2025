document.addEventListener('DOMContentLoaded', () => {
    // Menyeleksi elemen-elemen penting dari HTML
    const taskInput = document.getElementById('task-input');
    const addTaskBtn = document.getElementById('add-task-btn');
    const taskListContainer = document.getElementById('task-list-container');
    const clearAllBtn = document.getElementById('clear-all-btn');

    const API_URL = 'api.php'; // Alamat file PHP kita

    // Fungsi untuk memuat semua tugas dari server
    async function loadTasks() {
        // Membersihkan daftar tugas sebelum memuat yang baru
        taskListContainer.innerHTML = 'Memuat tugas...';

        try {
            const response = await fetch(`${API_URL}?action=get`);
            const tasks = await response.json();

            taskListContainer.innerHTML = ''; // Kosongkan lagi

            if (tasks.length === 0) {
                taskListContainer.innerHTML = 'Belum ada tugas.';
            } else {
                tasks.forEach(task => {
                    const taskElement = createTaskElement(task);
                    taskListContainer.appendChild(taskElement);
                });
            }
        } catch (error) {
            taskListContainer.innerHTML = 'Gagal memuat tugas.';
            console.error('Error:', error);
        }
    }

    // Fungsi untuk membuat elemen HTML untuk satu tugas
    function createTaskElement(task) {
        const item = document.createElement('div');
        item.className = 'task-item';
        item.dataset.id = task.id; // Menyimpan ID tugas di elemen

        const text = document.createElement('span');
        text.textContent = task.text;

        const deleteBtn = document.createElement('button');
        deleteBtn.className = 'delete-btn';
        deleteBtn.textContent = 'Hapus';
        deleteBtn.onclick = () => deleteTask(task.id);

        item.appendChild(text);
        item.appendChild(deleteBtn);
        return item;
    }

    // Fungsi untuk menambah tugas baru
    async function addTask() {
        const taskText = taskInput.value.trim();
        if (taskText === '') return; // Jangan tambah jika input kosong

        const formData = new FormData();
        formData.append('task', taskText);

        await fetch(`${API_URL}?action=add`, {
            method: 'POST',
            body: formData
        });

        taskInput.value = ''; // Kosongkan input
        loadTasks(); // Muat ulang daftar tugas
    }

    // Fungsi untuk menghapus satu tugas
    async function deleteTask(id) {
        if (!confirm('Apakah Anda yakin ingin menghapus tugas ini?')) return;
        
        const formData = new FormData();
        formData.append('id', id);

        await fetch(`${API_URL}?action=delete`, {
            method: 'POST',
            body: formData
        });

        loadTasks(); // Muat ulang daftar tugas
    }

    // Fungsi untuk menghapus semua tugas
    async function clearAllTasks() {
        if (!confirm('PERINGATAN: Semua tugas akan dihapus. Lanjutkan?')) return;

        await fetch(`${API_URL}?action=clear`, {
            method: 'POST'
        });

        loadTasks(); // Muat ulang daftar tugas
    }

    // Menambahkan event listener ke tombol
    addTaskBtn.addEventListener('click', addTask);
    clearAllBtn.addEventListener('click', clearAllTasks);
    
    // Memungkinkan menambah tugas dengan menekan 'Enter'
    taskInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            addTask();
        }
    });

    // Muat tugas saat halaman pertama kali dibuka
    loadTasks();
});