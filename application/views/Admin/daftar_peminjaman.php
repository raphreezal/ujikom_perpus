<main class="main-content position-relative border-radius-lg">
<h2>Daftar Ajuan Peminjaman Buku</h2>

<?php if ($this->session->flashdata('message')) echo $this->session->flashdata('message'); ?>

<main class="main-content p-6">
  <h2 class="text-2xl font-bold mb-4 text-gray-800">Daftar Ajuan Peminjaman Buku</h2>

  <?php if ($this->session->flashdata('message')) echo $this->session->flashdata('message'); ?>

  <div class="overflow-x-auto bg-white shadow-md rounded-lg">
    <table class="min-w-full divide-y divide-gray-200 text-sm">
      <thead class="bg-gray-100">
        <tr>
          <th class="px-6 py-3 text-left font-semibold text-gray-700">Nama User</th>
          <th class="px-6 py-3 text-left font-semibold text-gray-700">Judul Buku</th>
          <th class="px-6 py-3 text-left font-semibold text-gray-700">Tanggal Pinjam</th>
          <th class="px-6 py-3 text-left font-semibold text-gray-700">Tanggal Kembali</th>
          <th class="px-6 py-3 text-left font-semibold text-gray-700">Status</th>
          <th class="px-6 py-3 text-center font-semibold text-gray-700">Aksi</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100">
        <?php foreach ($ajuan as $a): ?>
        <tr class="hover:bg-gray-50">
          <td class="px-6 py-4 text-gray-800"><?= htmlspecialchars($a->username) ?></td>
          <td class="px-6 py-4 text-gray-800"><?= htmlspecialchars($a->judul) ?></td>
          <td class="px-6 py-4 text-gray-800"><?= $a->tanggal_pinjam ?></td>
          <td class="px-6 py-4 text-gray-800"><?= $a->tanggal_kembali ?></td>
          <td class="px-6 py-4">
            <?php if ($a->status == 'pending'): ?>
              <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full font-semibold text-sm">Pending</span>
            <?php elseif ($a->status == 'diterima'): ?>
              <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold text-sm">✔ Diterima</span>
            <?php else: ?>
              <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full font-semibold text-sm">✘ Ditolak</span>
            <?php endif; ?>
          </td>
          <td class="px-6 py-4 text-center">
            <?php if ($a->status == 'pending'): ?>
              <div class="flex justify-center space-x-2">
                <a href="<?= base_url('peminjaman/acc/'.$a->id_peminjaman) ?>"
                   class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg transition duration-200 shadow">
                   ✔ Terima
                </a>
                <a href="<?= base_url('peminjaman/tolak/'.$a->id_peminjaman) ?>"
                   class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg transition duration-200 shadow">
                   ✘ Tolak
                </a>
              </div>
            <?php else: ?>
              <span class="text-gray-500 italic text-sm">Tidak ada aksi</span>
            <?php endif; ?>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</main>
