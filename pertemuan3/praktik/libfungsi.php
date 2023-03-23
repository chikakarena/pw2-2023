<?php
	/**
     * PHP Function
		 * 1. winRate($jumlahMenang, $jumlahKalah) | Menghitung Win Rate
		 * 2. cek_tier($winRate) | Menentukan tier berdasarkan fungsi winrate
		 * 3. predikat($winRate) | Menentukan predikat berdasarkan fungsi cek_tier
    */

    function winRate($jumlahMenang, $jumlahKalah) {
		// WinRate = jumlahMenang / totalMatch
        $totalMatch = $jumlahMenang + $jumlahKalah;
        $wr = $jumlahMenang / $totalMatch;

        return $wr;
    }

    function cek_tier($winRate) {
        // Menentukan tier berdasarkan fungsi win rate
        if ($winRate >= 0.7) {
            return 'Mythic';
        } elseif ($winRate >= 0.45) {
            return 'Legend';
        } elseif ($winRate >= 0.2) {
            return 'Epic';
        } else {
            return 'Master';
        }
    }

    function predikat($winRate){
		// Menentukan predikat berdasarkan fungsi cek_tier
        switch (cek_tier($winRate)) {
            case "Mythic":
                return 'Sangat memuaskan';
                break;
            case "Legend":
                return 'Memuaskan';
                break;
            case "Epic":
                return 'Mengecewakan';
                break;
            default:
                return 'Sangat mengecewakan';
                break;
        }
    }

?>