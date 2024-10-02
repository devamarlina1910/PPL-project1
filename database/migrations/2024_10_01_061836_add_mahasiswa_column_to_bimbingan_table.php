public function up()
{
Schema::table('bimbingan', function (Blueprint $table) {
$table->string('mahasiswa')->after('id'); // Tambahkan kolom 'mahasiswa'
});
}

public function down()
{
Schema::table('bimbingan', function (Blueprint $table) {
$table->dropColumn('mahasiswa');
});
}