<?hh // strict
namespace google\protobuf;

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// Source: google/protobuf/api.proto

type ApiFields = shape (
  ?'name' => string,
  ?'methods' => vec<\google\protobuf\MethodFields>,
  ?'options' => vec<\google\protobuf\OptionFields>,
  ?'version' => string,
  ?'source_context' => ?\google\protobuf\SourceContextFields,
  ?'mixins' => vec<\google\protobuf\MixinFields>,
  ?'syntax' => \google\protobuf\Syntax_enum_t,
);
class Api implements \Protobuf\Message {
  public string $name;
  public vec<\google\protobuf\Method> $methods;
  public vec<\google\protobuf\Option> $options;
  public string $version;
  public ?\google\protobuf\SourceContext $source_context;
  public vec<\google\protobuf\Mixin> $mixins;
  public \google\protobuf\Syntax_enum_t $syntax;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'name' => string,
    ?'methods' => vec<\google\protobuf\Method>,
    ?'options' => vec<\google\protobuf\Option>,
    ?'version' => string,
    ?'source_context' => ?\google\protobuf\SourceContext,
    ?'mixins' => vec<\google\protobuf\Mixin>,
    ?'syntax' => \google\protobuf\Syntax_enum_t,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->methods = $s['methods'] ?? vec[];
    $this->options = $s['options'] ?? vec[];
    $this->version = $s['version'] ?? '';
    $this->source_context = $s['source_context'] ?? null;
    $this->mixins = $s['mixins'] ?? vec[];
    $this->syntax = $s['syntax'] ?? \google\protobuf\Syntax::FromInt(0);
    $this->XXX_unrecognized = '';
  }

  public function setFields(ApiFields $s = shape()): void {
    if (Shapes::keyExists($s, 'name')) $this->name = $s['name'];
    if (Shapes::keyExists($s, 'methods')) {
      if ($this->methods is null) $this->methods = new \google\protobuf\Method();
      $this->methods->setFields($s['methods'] as nonnull);
    }
    if (Shapes::keyExists($s, 'options')) {
      if ($this->options is null) $this->options = new \google\protobuf\Option();
      $this->options->setFields($s['options'] as nonnull);
    }
    if (Shapes::keyExists($s, 'version')) $this->version = $s['version'];
    if (Shapes::keyExists($s, 'source_context')) {
      if ($this->source_context is null) $this->source_context = new \google\protobuf\SourceContext();
      $this->source_context->setFields($s['source_context'] as nonnull);
    }
    if (Shapes::keyExists($s, 'mixins')) {
      if ($this->mixins is null) $this->mixins = new \google\protobuf\Mixin();
      $this->mixins->setFields($s['mixins'] as nonnull);
    }
    if (Shapes::keyExists($s, 'syntax')) $this->syntax = $s['syntax'];
  }

  public function getNonDefaultFields(): ApiFields {
    $s = shape();
    if ($this->name !== '') $s['name'] = $this->name;
    if (!C\is_empty($this->methods)) $s['methods'] = $this->methods;
    if (!C\is_empty($this->options)) $s['options'] = $this->options;
    if ($this->version !== '') $s['version'] = $this->version;
    if (!C\is_empty($this->mixins)) $s['mixins'] = $this->mixins;
    if ($this->syntax !== \google\protobuf\Syntax::FromInt(0)) $s['syntax'] = $this->syntax;
    return $s;
  }

  public function MessageName(): string {
    return "google.protobuf.Api";
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->name = $d->readString();
          break;
        case 2:
          $obj = new \google\protobuf\Method();
          $obj->MergeFrom($d->readDecoder());
          $this->methods []= $obj;
          break;
        case 3:
          $obj = new \google\protobuf\Option();
          $obj->MergeFrom($d->readDecoder());
          $this->options []= $obj;
          break;
        case 4:
          $this->version = $d->readString();
          break;
        case 5:
          if ($this->source_context == null) $this->source_context = new \google\protobuf\SourceContext();
          $this->source_context->MergeFrom($d->readDecoder());
          break;
        case 6:
          $obj = new \google\protobuf\Mixin();
          $obj->MergeFrom($d->readDecoder());
          $this->mixins []= $obj;
          break;
        case 7:
          $this->syntax = \google\protobuf\Syntax::FromInt($d->readVarint());
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->name !== '') {
      $e->writeTag(1, 2);
      $e->writeString($this->name);
    }
    foreach ($this->methods as $msg) {
      $nested = new \Protobuf\Internal\Encoder();
      $msg->WriteTo($nested);
      $e->writeEncoder($nested, 2);
    }
    foreach ($this->options as $msg) {
      $nested = new \Protobuf\Internal\Encoder();
      $msg->WriteTo($nested);
      $e->writeEncoder($nested, 3);
    }
    if ($this->version !== '') {
      $e->writeTag(4, 2);
      $e->writeString($this->version);
    }
    $msg = $this->source_context;
    if ($msg != null) {
      $nested = new \Protobuf\Internal\Encoder();
      $msg->WriteTo($nested);
      $e->writeEncoder($nested, 5);
    }
    foreach ($this->mixins as $msg) {
      $nested = new \Protobuf\Internal\Encoder();
      $msg->WriteTo($nested);
      $e->writeEncoder($nested, 6);
    }
    if ($this->syntax !== \google\protobuf\Syntax::FromInt(0)) {
      $e->writeTag(7, 0);
      $e->writeVarint($this->syntax);
    }
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeString('name', 'name', $this->name, false);
    $e->writeMessageList('methods', 'methods', $this->methods);
    $e->writeMessageList('options', 'options', $this->options);
    $e->writeString('version', 'version', $this->version, false);
    $e->writeMessage('source_context', 'sourceContext', $this->source_context, false);
    $e->writeMessageList('mixins', 'mixins', $this->mixins);
    $e->writeEnum('syntax', 'syntax', \google\protobuf\Syntax::ToStringDict(), $this->syntax, false);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) return;
    $d = \Protobuf\Internal\JsonDecoder::readObject($m);
    foreach ($d as $k => $v) {
      switch ($k) {
        case 'name':
          $this->name = \Protobuf\Internal\JsonDecoder::readString($v);
          break;
        case 'methods':
          foreach(\Protobuf\Internal\JsonDecoder::readList($v) as $vv) {
            $obj = new \google\protobuf\Method();
            $obj->MergeJsonFrom($vv);
            $this->methods []= $obj;
          }
          break;
        case 'options':
          foreach(\Protobuf\Internal\JsonDecoder::readList($v) as $vv) {
            $obj = new \google\protobuf\Option();
            $obj->MergeJsonFrom($vv);
            $this->options []= $obj;
          }
          break;
        case 'version':
          $this->version = \Protobuf\Internal\JsonDecoder::readString($v);
          break;
        case 'source_context': case 'sourceContext':
          if ($v === null) break;
          if ($this->source_context == null) $this->source_context = new \google\protobuf\SourceContext();
          $this->source_context->MergeJsonFrom($v);
          break;
        case 'mixins':
          foreach(\Protobuf\Internal\JsonDecoder::readList($v) as $vv) {
            $obj = new \google\protobuf\Mixin();
            $obj->MergeJsonFrom($vv);
            $this->mixins []= $obj;
          }
          break;
        case 'syntax':
          $this->syntax = \google\protobuf\Syntax::FromMixed($v);
          break;
        default:
        break;
      }
    }
  }

  public function CopyFrom(\Protobuf\Message $o): \Errors\Error {
    if (!($o is Api)) {
      return \Errors\Errorf('CopyFrom failed: incorrect type received: %s', $o->MessageName());
    }
    $this->name = $o->name;
    foreach ($o->methods as $v) {
      $nv = new \google\protobuf\Method();
      $nv->CopyFrom($v);
      $this->methods []= $nv;
    }
    foreach ($o->options as $v) {
      $nv = new \google\protobuf\Option();
      $nv->CopyFrom($v);
      $this->options []= $nv;
    }
    $this->version = $o->version;
    $tmp = $o->source_context;
    if ($tmp !== null) {
      $nv = new \google\protobuf\SourceContext();
      $nv->CopyFrom($tmp);
      $this->source_context = $nv;
    }
    foreach ($o->mixins as $v) {
      $nv = new \google\protobuf\Mixin();
      $nv->CopyFrom($v);
      $this->mixins []= $nv;
    }
    $this->syntax = $o->syntax;
    $this->XXX_unrecognized = $o->XXX_unrecognized;
    return \Errors\Ok();
  }
}

type MethodFields = shape (
  ?'name' => string,
  ?'request_type_url' => string,
  ?'request_streaming' => bool,
  ?'response_type_url' => string,
  ?'response_streaming' => bool,
  ?'options' => vec<\google\protobuf\OptionFields>,
  ?'syntax' => \google\protobuf\Syntax_enum_t,
);
class Method implements \Protobuf\Message {
  public string $name;
  public string $request_type_url;
  public bool $request_streaming;
  public string $response_type_url;
  public bool $response_streaming;
  public vec<\google\protobuf\Option> $options;
  public \google\protobuf\Syntax_enum_t $syntax;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'name' => string,
    ?'request_type_url' => string,
    ?'request_streaming' => bool,
    ?'response_type_url' => string,
    ?'response_streaming' => bool,
    ?'options' => vec<\google\protobuf\Option>,
    ?'syntax' => \google\protobuf\Syntax_enum_t,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->request_type_url = $s['request_type_url'] ?? '';
    $this->request_streaming = $s['request_streaming'] ?? false;
    $this->response_type_url = $s['response_type_url'] ?? '';
    $this->response_streaming = $s['response_streaming'] ?? false;
    $this->options = $s['options'] ?? vec[];
    $this->syntax = $s['syntax'] ?? \google\protobuf\Syntax::FromInt(0);
    $this->XXX_unrecognized = '';
  }

  public function setFields(MethodFields $s = shape()): void {
    if (Shapes::keyExists($s, 'name')) $this->name = $s['name'];
    if (Shapes::keyExists($s, 'request_type_url')) $this->request_type_url = $s['request_type_url'];
    if (Shapes::keyExists($s, 'request_streaming')) $this->request_streaming = $s['request_streaming'];
    if (Shapes::keyExists($s, 'response_type_url')) $this->response_type_url = $s['response_type_url'];
    if (Shapes::keyExists($s, 'response_streaming')) $this->response_streaming = $s['response_streaming'];
    if (Shapes::keyExists($s, 'options')) {
      if ($this->options is null) $this->options = new \google\protobuf\Option();
      $this->options->setFields($s['options'] as nonnull);
    }
    if (Shapes::keyExists($s, 'syntax')) $this->syntax = $s['syntax'];
  }

  public function getNonDefaultFields(): MethodFields {
    $s = shape();
    if ($this->name !== '') $s['name'] = $this->name;
    if ($this->request_type_url !== '') $s['request_type_url'] = $this->request_type_url;
    if ($this->request_streaming !== false) $s['request_streaming'] = $this->request_streaming;
    if ($this->response_type_url !== '') $s['response_type_url'] = $this->response_type_url;
    if ($this->response_streaming !== false) $s['response_streaming'] = $this->response_streaming;
    if (!C\is_empty($this->options)) $s['options'] = $this->options;
    if ($this->syntax !== \google\protobuf\Syntax::FromInt(0)) $s['syntax'] = $this->syntax;
    return $s;
  }

  public function MessageName(): string {
    return "google.protobuf.Method";
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->name = $d->readString();
          break;
        case 2:
          $this->request_type_url = $d->readString();
          break;
        case 3:
          $this->request_streaming = $d->readBool();
          break;
        case 4:
          $this->response_type_url = $d->readString();
          break;
        case 5:
          $this->response_streaming = $d->readBool();
          break;
        case 6:
          $obj = new \google\protobuf\Option();
          $obj->MergeFrom($d->readDecoder());
          $this->options []= $obj;
          break;
        case 7:
          $this->syntax = \google\protobuf\Syntax::FromInt($d->readVarint());
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->name !== '') {
      $e->writeTag(1, 2);
      $e->writeString($this->name);
    }
    if ($this->request_type_url !== '') {
      $e->writeTag(2, 2);
      $e->writeString($this->request_type_url);
    }
    if ($this->request_streaming !== false) {
      $e->writeTag(3, 0);
      $e->writeBool($this->request_streaming);
    }
    if ($this->response_type_url !== '') {
      $e->writeTag(4, 2);
      $e->writeString($this->response_type_url);
    }
    if ($this->response_streaming !== false) {
      $e->writeTag(5, 0);
      $e->writeBool($this->response_streaming);
    }
    foreach ($this->options as $msg) {
      $nested = new \Protobuf\Internal\Encoder();
      $msg->WriteTo($nested);
      $e->writeEncoder($nested, 6);
    }
    if ($this->syntax !== \google\protobuf\Syntax::FromInt(0)) {
      $e->writeTag(7, 0);
      $e->writeVarint($this->syntax);
    }
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeString('name', 'name', $this->name, false);
    $e->writeString('request_type_url', 'requestTypeUrl', $this->request_type_url, false);
    $e->writeBool('request_streaming', 'requestStreaming', $this->request_streaming, false);
    $e->writeString('response_type_url', 'responseTypeUrl', $this->response_type_url, false);
    $e->writeBool('response_streaming', 'responseStreaming', $this->response_streaming, false);
    $e->writeMessageList('options', 'options', $this->options);
    $e->writeEnum('syntax', 'syntax', \google\protobuf\Syntax::ToStringDict(), $this->syntax, false);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) return;
    $d = \Protobuf\Internal\JsonDecoder::readObject($m);
    foreach ($d as $k => $v) {
      switch ($k) {
        case 'name':
          $this->name = \Protobuf\Internal\JsonDecoder::readString($v);
          break;
        case 'request_type_url': case 'requestTypeUrl':
          $this->request_type_url = \Protobuf\Internal\JsonDecoder::readString($v);
          break;
        case 'request_streaming': case 'requestStreaming':
          $this->request_streaming = \Protobuf\Internal\JsonDecoder::readBool($v);
          break;
        case 'response_type_url': case 'responseTypeUrl':
          $this->response_type_url = \Protobuf\Internal\JsonDecoder::readString($v);
          break;
        case 'response_streaming': case 'responseStreaming':
          $this->response_streaming = \Protobuf\Internal\JsonDecoder::readBool($v);
          break;
        case 'options':
          foreach(\Protobuf\Internal\JsonDecoder::readList($v) as $vv) {
            $obj = new \google\protobuf\Option();
            $obj->MergeJsonFrom($vv);
            $this->options []= $obj;
          }
          break;
        case 'syntax':
          $this->syntax = \google\protobuf\Syntax::FromMixed($v);
          break;
        default:
        break;
      }
    }
  }

  public function CopyFrom(\Protobuf\Message $o): \Errors\Error {
    if (!($o is Method)) {
      return \Errors\Errorf('CopyFrom failed: incorrect type received: %s', $o->MessageName());
    }
    $this->name = $o->name;
    $this->request_type_url = $o->request_type_url;
    $this->request_streaming = $o->request_streaming;
    $this->response_type_url = $o->response_type_url;
    $this->response_streaming = $o->response_streaming;
    foreach ($o->options as $v) {
      $nv = new \google\protobuf\Option();
      $nv->CopyFrom($v);
      $this->options []= $nv;
    }
    $this->syntax = $o->syntax;
    $this->XXX_unrecognized = $o->XXX_unrecognized;
    return \Errors\Ok();
  }
}

type MixinFields = shape (
  ?'name' => string,
  ?'root' => string,
);
class Mixin implements \Protobuf\Message {
  public string $name;
  public string $root;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'name' => string,
    ?'root' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->root = $s['root'] ?? '';
    $this->XXX_unrecognized = '';
  }

  public function setFields(MixinFields $s = shape()): void {
    if (Shapes::keyExists($s, 'name')) $this->name = $s['name'];
    if (Shapes::keyExists($s, 'root')) $this->root = $s['root'];
  }

  public function getNonDefaultFields(): MixinFields {
    $s = shape();
    if ($this->name !== '') $s['name'] = $this->name;
    if ($this->root !== '') $s['root'] = $this->root;
    return $s;
  }

  public function MessageName(): string {
    return "google.protobuf.Mixin";
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->name = $d->readString();
          break;
        case 2:
          $this->root = $d->readString();
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->name !== '') {
      $e->writeTag(1, 2);
      $e->writeString($this->name);
    }
    if ($this->root !== '') {
      $e->writeTag(2, 2);
      $e->writeString($this->root);
    }
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeString('name', 'name', $this->name, false);
    $e->writeString('root', 'root', $this->root, false);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) return;
    $d = \Protobuf\Internal\JsonDecoder::readObject($m);
    foreach ($d as $k => $v) {
      switch ($k) {
        case 'name':
          $this->name = \Protobuf\Internal\JsonDecoder::readString($v);
          break;
        case 'root':
          $this->root = \Protobuf\Internal\JsonDecoder::readString($v);
          break;
        default:
        break;
      }
    }
  }

  public function CopyFrom(\Protobuf\Message $o): \Errors\Error {
    if (!($o is Mixin)) {
      return \Errors\Errorf('CopyFrom failed: incorrect type received: %s', $o->MessageName());
    }
    $this->name = $o->name;
    $this->root = $o->root;
    $this->XXX_unrecognized = $o->XXX_unrecognized;
    return \Errors\Ok();
  }
}


class XXX_FileDescriptor_google_protobuf_api__proto implements \Protobuf\Internal\FileDescriptor {
  const string NAME = 'google/protobuf/api.proto';
  const string RAW =
  'eNqUk82O0zAUhZWkTQeP6ICRwHQxikYsIn4SMTzBFKFZIESUgpDYVGkxwSLxNbYztK/Dki'
  .'VvwJshO3F/0iLBztfnu6f3HjfoYQlQVjQVEjQsms9pIVhiC3zWSomTJo/6rIJGLul8CVzT'
  .'lW7ByaRP6bXoTC5++yi4EgxjNOBFTYkXefGt3J7xczSqqf4CnxTxoyA+vXyQ9AZI3lg9d5'
  .'xpAaEZcEWCv7S8tXruOEzQ6IZKxYCTgf1xV+JXaLy/DxlGXnx6eX7gObPYy5bKb6vdEico'
  .'rNmKcUVCO9L9wy2MnHcUTlGo1lwXKzKKvHh8ZIWZlfMOu/jlo7AN4miMMboj6beGKj03wc'
  .'8bWRHf6uPu/t1a0Peywk/QXUcqLWlRM16SIPLik9xZzNw9fmxgJYAruvVtEzxzgjN+hvCG'
  .'3ToPrfPGZWu984rhP77if4eWoqGN/WhkGA0kgO5isufpDbq3hLpvOz25EiwzReZ9fNqJJV'
  .'QFLxOQ5f5/XqVfOXzn5osSix9+cJ1Nf/rn121T5gb9QKvqteFMemoRWosXfwIAAP//NWss'
  .'Mw';
  public function Name(): string {
    return self::NAME;
  }

  public function FileDescriptorProtoBytes(): string {
    return (string)\gzuncompress(\base64_decode(self::RAW));
  }
}
