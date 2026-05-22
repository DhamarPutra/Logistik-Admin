<!DOCTYPE html>
<html>

<head>
    <title>Create Seller</title>
</head>

<body>
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (session('success'))
    <div>
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('seller.store') }}" method="POST">
        @csrf
        <label for="name">Nama Seller:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="location">Lokasi Seller:</label>
        <input type="text" id="location" name="location" required><br>

        <label for="items">Barang:</label><br>
        <div id="items-container">
            <div>
                <label for="item_code_1">Kode Barang:</label>
                <input type="text" id="item_code_1" name="items[0][item_code]" required>
                <label for="item_name_1">Nama Barang:</label>
                <input type="text" id="item_name_1" name="items[0][item_name]" required>
            </div>
        </div>
        <button type="button" onclick="addItem()">Tambah Barang</button><br>

        <button type="submit">Simpan</button>
    </form>

    <script>
        let itemIndex = 1;

        function addItem() {
            itemIndex++;
            const container = document.getElementById('items-container');
            const newItem = document.createElement('div');
            newItem.innerHTML = `
                <label for="item_code_${itemIndex}">Kode Barang:</label>
                <input type="text" id="item_code_${itemIndex}" name="items[${itemIndex - 1}][item_code]" required>
                <label for="item_name_${itemIndex}">Nama Barang:</label>
                <input type="text" id="item_name_${itemIndex}" name="items[${itemIndex - 1}][item_name]" required>
            `;
            container.appendChild(newItem);
        }
    </script>
</body>

</html>