# xhtkyy/im-helper

```
composer require xhtkyy/im-helper dev-main
```

生成protobuf

```
//例如
vendor/bin/grpc-code-generator -protoPath=../../protos,../../protos/third_party -clientExtendClass=\\Xhtkyy\\GrpcClient\\AbstractClient -path=./grpc -proto='../../protos/im/v1/schema.proto'
```