<?php

namespace Uru\Tests\DR;

use PHPUnit\Framework\TestCase;
use Uru\DR\Response\Token;

/**
 * @internal
 *
 * @coversNothing
 */
class TokenResponseTest extends TestCase
{
    private $response;
    private $token;

    /**
     * @throws \JsonException
     */
    protected function setUp(): void
    {
        $content = file_get_contents(__DIR__.'/Stubs/token_response.json');
        $this->response = json_decode($content, true, 512, JSON_THROW_ON_ERROR);
        $this->token = new Token($this->response);
    }

    public function testCartUrl(): void
    {
        $this->assertEquals($this->response['expires_in'], $this->token->getExpiresIn());
    }

    public function testAccessToken(): void
    {
        $this->assertEquals($this->response['access_token'], $this->token->getAccessToken());
    }

    public function testTokenType(): void
    {
        $this->assertEquals($this->response['token_type'], $this->token->getTokenType());
    }
}
