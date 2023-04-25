<?php

namespace App\Service;

use App\Models\Protocol;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class ProtocolService
{
    public function store($data)
    {
        try {
            Db::beginTransaction();
            if (isset($data['user_ids'])) {
                $userIds = $data['user_ids'];
                unset($data['user_ids']);
            }

            $protocol = Protocol::firstOrCreate($data);
            if (isset($userIds)) {
                $protocol->users()->attach($userIds);
            }
            DB::commit();
        } catch (\Exception $exception) {

            DB::rollBack();
            abort(500);
        }
    }

    public function update($data, $protocol)
    {

        try {
            Db::beginTransaction();
            if (isset($data['user_ids'])) {
                $userIds = $data['user_ids'];
                unset($data['user_ids']);
            }
            $protocol->update($data);
            if (isset($userIds)) {
                $protocol->users()->sync($userIds);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);

        }
        return $protocol;
    }
}
