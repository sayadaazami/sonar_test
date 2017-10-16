#### Run From CommandLine

```bash
	sonar-scanner.bat \
    -Dsonar.projectKey=sonar_test_key:test \
    -Dsonar.sources=. \
    -Dsonar.host.url=https://sonarcloud.io \
    -Dsonar.organization=sayadaazami-github \
    -Dsonar.login=TOKEN \
	-X
```