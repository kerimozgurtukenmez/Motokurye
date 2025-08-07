<footer class="bg-light text-dark mt-auto py-4 shadow-sm border-top">
    <div class="container text-center">
        <p class="mb-1 fw-semibold">© <?php echo date("Y"); ?> Motokurye</p>
        <small class="text-muted">Hızlı ve güvenilir teslimatlar için buradayız.</small>
    </div>
</footer>
    <!-- Bootstrap JS -->
<script>
    document.querySelectorAll('path').forEach(path => {
        path.addEventListener('click', () => {
            const sehir = path.id;
            alert(`Tıkladığın şehir: ${sehir}`);
            // Buraya yönlendirme veya veri çekme kodu koyabilirsin
        });
    });
</script>
<script>
    const paths = document.querySelectorAll('svg path');

    paths.forEach(path => {
        path.addEventListener('mouseenter', () => {
            path.parentNode.appendChild(path); // hover'daki path en sona (en üste) alınır
        });
    });
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
