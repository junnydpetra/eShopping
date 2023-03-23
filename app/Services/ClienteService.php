<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Models\{Usuario,
                Endereco};
use Log;

class ClienteService
{
    public function salvarUsuario(Usuario $user, Endereco $endereco)
    {
        try {
            $dbUsuario = Usuario::where("login", $user->login)->first();
            if ($dbUsuario) {
                return ['status' => 'err', 'message' => 'Já há um registro usando esse username!'];
            }

            \DB::beginTransaction();
                $user->save();
                $endereco->usuario_id = $user->id;
                $endereco->save();
            DB::commit();

            return ['status' => 'ok', 'message' => 'Usuário cadastrado com sucesso!'];
        } catch (\Exception $e) {
            Log::error("ERRO", ['file' => 'ClienteService.salvarUsuario',
                                          'message' => $e->getMessage()]);
            DB::rollback();
            return ['status' => 'err', 'message' => 'Usuário não cadastrado!'];
        }
    }
}


// \Throwable $th
