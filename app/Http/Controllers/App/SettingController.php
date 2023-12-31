<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingStoreRequest;
use Modules\Settings\DTO\SettingDto;
use Modules\Settings\Interfaces\SettingServiceInterface;
use Modules\Settings\Resources\SettingResource;

class SettingController extends Controller
{
    public function __construct(
        protected SettingServiceInterface $service
    ) {

    }

    /**
     * store a setting
     *
     * @param  SettingStoreRequest  $request
     * @return SettingResource
     */
    public function store(SettingStoreRequest $request): SettingResource
    {
        $setting = $this->service->store(
            $request->user(),
            SettingDto::fromRequest($request)
        );

        return SettingResource::make($setting);
    }
}
