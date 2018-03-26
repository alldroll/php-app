<?php

namespace AppTest\App\Authentication\Service;

use App\Authentication\Repository\UserRepositoryInterface;
use PHPUnit\Framework\TestCase;

class AuthenticationServiceTest extends TestCase
{
	public function testShouldReturnsAnonymousToken()
	{
		$someId = 13;

		$repository = $this->createMock(UserRepositoryInterface::class)
			->expects($this->any()) // replace with $this->once()
			->method('findById')
			->with($someId)
			->willReturn(null);

		// $service = new AuthenticationService($repository, ...);
		// $userToken = $service->authenticate($credentials)
		// $this->assertTrue($userToken->isAnonymous());
	}
}