<?php

declare(strict_types=1);

namespace Shopify\Auth;

final class AccessTokenOfflineExpiringResponse extends AccessTokenResponse
{
    public function __construct(
        string $accessToken,
        string $scope,
        private readonly int $expiresIn,
        private readonly string $refreshToken,
        private readonly int $refreshTokenExpiresIn
    ) {
        parent::__construct($accessToken, $scope);
    }

    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }

    public function getRefreshToken(): string
    {
        return $this->refreshToken;
    }

    public function getRefreshTokenExpiresIn(): int
    {
        return $this->refreshTokenExpiresIn;
    }
}
