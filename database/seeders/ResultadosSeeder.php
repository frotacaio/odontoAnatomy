<?php

namespace Database\Seeders;

use App\Models\Resultados;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resultados::insert([
        [ 'resultado' => 'TÚBER DA MAXILA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        [ 'resultado' => 'FORAME MENTUAL', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        [ 'resultado' => 'EXTENSÃO ALVEOLAR DO SEIO MAXILAR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        [ 'resultado' => 'FISSURA PTERIGOPALATINA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        [ 'resultado' => 'INCISURA SIGMÓIDE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

        /* IMAGEM 02 */
        [ 'resultado' => 'CÔNDILO DA MANDÍBULA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        [ 'resultado' => 'BASE DA MANDÍBULA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        [ 'resultado' => 'ESPINHA NASAL ANTERIOR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        [ 'resultado' => 'LINHA OBLÍQUA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        
        /* IMAGEM 03 */
        [ 'resultado' => 'ESPAÇO AÉREO NASOFARÍNGEO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        [ 'resultado' => 'ARCO ZIGOMÁTICO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        [ 'resultado' => 'PALATO DURO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        [ 'resultado' => 'SEPTO NASAL', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        [ 'resultado' => 'ASSOALHO DA FOSSA NASAL', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        [ 'resultado' => 'PROCESSO ESTILÓIDE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

        /* IMAGEM 04 */
        [ 'resultado' => 'TUBÉRCULO GENIANO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        [ 'resultado' => 'FÓVEA SUBMANDIBULAR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        [ 'resultado' => 'EMINÊNCIA ARTICULAR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

        /* IMAGEM 05 */
        [ 'resultado' => 'LÂMINA PTERIGÓIDE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

        /* IMAGEM 06 */
        [ 'resultado' => 'HÂMULO PTERIGÓIDEO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        [ 'resultado' => 'PROCESSO ZIGOMÁTICO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

        /* IMAGEM 07 */
        [ 'resultado' => 'MEATO ACÚSTICO EXTERNO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        [ 'resultado' => 'BORDA LATERAL DA ÓRBITA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        [ 'resultado' => 'PROCESSO MASTÓIDE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

        /* IMAGEM 08 */
        [ 'resultado' => 'CANAL INFRAORBITÁRIO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        [ 'resultado' => 'FORAME INFRAORBITÁRIO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

        /* IMAGEM 09 */
        [ 'resultado' => 'SEIO MAXILAR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

        /* IMAGEM 10 */
        [ 'resultado' => 'CONCHA NASAL INFERIOR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

        /* IMAGEM 11 */
        [ 'resultado' => 'PROCESSO CORONÓIDE DA MANDÍBULA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        [ 'resultado' => 'FORAME INCISIVO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        [ 'resultado' => 'VÉRTEBRAS CERVICAIS', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

        //IMAGEM 12
        [ 'resultado' => 'CANAL DA MANDÍBULA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

        //IMAGEM 13
        [ 'resultado' => 'LINHA OBLÍQUA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        [ 'resultado' => 'OSSO HIÓIDE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
    ]);
    }
}
